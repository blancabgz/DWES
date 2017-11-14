<?php
Class Usuario {
    private $usuario = array("andrew"=>array("aaaa", "aa@a.es"),
        "pepe" => array("bbb", "bb@b.es"),
        "ceciliog" => array("ccc", "cc@c.es"),
        "donovan el vaquero" => array("ddd", "dd@d.es"),
        "chung lee" => array("eee", "ee@e.es"));

    function acceder($nombre) {
        $key=$nombre;
        if(array_key_exists ($key , $this->usuario)){
            print "Bienvenido a la aplicacion $key <br/>";
        }else {
            echo "No existe ese usuario";
        }
    }
    function getClave($nombre) {
        return $this->usuario[$nombre][0];
    }
    function getEmail($nombre) {
        return $this->usuario[$nombre][1];
    }

    function cambiaClave($nombre,$clave) {
        $this->usuario[$nombre][0]=$clave;
    }
}

$usu= new Usuario();
$usu->acceder('chung lee');
echo "Tu password en este momento es:". $usu->getClave("chung lee")."<br/>";
$usu->cambiaClave("chung lee", "12345");
echo "Tu password ha cambiado a: ".$usu->getClave("chung lee")."<br/>";
>