<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 15/11/2017
 * Time: 22:43
 */
$PATH = "..";
$dires = scandir($PATH);
echo '<ul>';
foreach ($dires as $dir) {
    if (is_dir($PATH . '/' . $dir))
        echo "<li>Carpeta: {$dir}</li>";
    else {
        $tamano = filesize($PATH . '/' . $dir);
        echo "<li>Tamaño de archivo: {$dir}    -   {$tamano} Bytes</li>";
    }
}
echo '</ul>';