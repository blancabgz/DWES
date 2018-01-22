-- Creamos la base de datos
CREATE DATABASE 'dbtiendas'
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_spanish_ci;
USE 'dbtiendas';
-- Creamos las tablas
CREATE TABLE 'dbtiendas'.'tienda' (
  'tienda_cod'    INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'tienda_nombre' VARCHAR(100) NOT NULL,
  'tienda_tlf'    VARCHAR(13)  NULL
)
  ENGINE = INNODB;
CREATE TABLE 'dbtiendas'.'producto' (
  'producto_cod'         VARCHAR(12)    NOT NULL,
  'producto_nombre'      VARCHAR(200)   NULL,
  'producto_nombrecorto' VARCHAR(50)    NOT NULL,
  'producto_descripcion' TEXT           NULL,
  'producto_pvp'         DECIMAL(10, 2) NOT NULL,
  'producto_familia'     VARCHAR(6)     NOT NULL,
  PRIMARY KEY ('producto_cod'),
  INDEX ('producto_familia'),
  UNIQUE ('producto_nombrecorto')
)
  ENGINE = INNODB;
CREATE TABLE 'dbtiendas'.'familia' (
  'familia_cod'    VARCHAR(6)   NOT NULL,
  'familia_nombre' VARCHAR(200) NOT NULL,
  PRIMARY KEY ('familia_cod')
)
  ENGINE = INNODB;
CREATE TABLE 'dbtiendas'.'stock' (
  'stock_producto' VARCHAR(12) NOT NULL,
  'stock_tienda'   INT         NOT NULL,
  'stock_unidades' INT         NOT NULL,
  PRIMARY KEY ('stock_producto', 'stock_tienda')
)
  ENGINE = INNODB;
-- Creamos las claves foráneas
ALTER TABLE 'producto'
  ADD CONSTRAINT 'producto_ibfk_1'
FOREIGN KEY ('producto_familia') REFERENCES 'familia' ('familia_cod')
  ON UPDATE CASCADE;
--
ALTER TABLE 'stock'
  ADD CONSTRAINT 'stock_ibfk_2'
FOREIGN KEY ('stock_tienda') REFERENCES 'tienda' ('tienda_cod')
  ON UPDATE CASCADE,
  ADD CONSTRAINT 'stock_ibfk_1'
FOREIGN KEY ('stock_producto') REFERENCES 'producto' ('producto_cod')
  ON UPDATE CASCADE;
--
-- Crear usuario y permisos
CREATE USER 'dwes'
  IDENTIFIED BY 'abc123.';
GRANT ALL ON 'dbtiendas'.*
TO 'dwes';