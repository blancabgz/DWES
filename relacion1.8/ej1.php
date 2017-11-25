<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 15/11/2017
 * Time: 20:14
 */

$FILE = "visitas.txt";
$fichero = fopen($FILE, "r+") or die("NO SE PUEDE ABRIR");
$cont = fread($fichero, filesize("visitas.txt"));
rewind($fichero);
echo "Visitas: " . $cont;
$cont++;
$fichero = fopen($FILE, "w") or die("NO SE PUEDE ABRIR");
fwrite($fichero, $cont++);
fclose($fichero);