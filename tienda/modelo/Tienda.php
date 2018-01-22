<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 22/01/2018
 * Time: 11:58
 */

class Tienda
{
private $tienda_cod;
private $tienda_nombre;
private $tienda_tlf;

    /**
     * Tienda constructor.
     * @param $tienda_cod
     * @param $tienda_nombre
     * @param $tienda_tlf
     */
    public function __construct($tienda_cod, $tienda_nombre, $tienda_tlf)
    {
        $this->tienda_cod = $tienda_cod;
        $this->tienda_nombre = $tienda_nombre;
        $this->tienda_tlf = $tienda_tlf;
    }

    /**
     * @return mixed
     */
    public function getTiendaCod()
    {
        return $this->tienda_cod;
    }

    /**
     * @return mixed
     */
    public function getTiendaNombre()
    {
        return $this->tienda_nombre;
    }

    /**
     * @return mixed
     */
    public function getTiendaTlf()
    {
        return $this->tienda_tlf;
    }


}