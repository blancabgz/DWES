<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 22/01/2018
 * Time: 11:54
 */

class Producto
{
    private $producto_cod;
    private $producto_nombre;
    private $producto_nombrecorto;
    private $producto_descripcion;
    private $producto_pvp;
    private $producto_familia;

    /**
     * Producto constructor.
     * @param $producto_cod
     * @param $producto_nombre
     * @param $producto_nombrecorto
     * @param $producto_descripcion
     * @param $producto_pvp
     * @param $producto_familia
     */
    public function __construct($producto_cod, $producto_nombre, $producto_nombrecorto, $producto_descripcion, $producto_pvp, $producto_familia)
    {
        $this->producto_cod = $producto_cod;
        $this->producto_nombre = $producto_nombre;
        $this->producto_nombrecorto = $producto_nombrecorto;
        $this->producto_descripcion = $producto_descripcion;
        $this->producto_pvp = $producto_pvp;
        $this->producto_familia = $producto_familia;
    }

    /**
     * @return mixed
     */
    public function getProductoFamilia()
    {
        return $this->producto_familia;
    }

    /**
     * @param mixed $producto_familia
     */
    public function setProductoFamilia($producto_familia)
    {
        $this->producto_familia = $producto_familia;
    }


}