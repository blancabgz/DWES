<?php
function listar_directorios_ruta($ruta){
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) !== false) {
                if (is_dir($ruta . $file) && $file!="." && $file!=".."){
                    echo "<br>Directorio: $ruta$file";
                    listar_directorios_ruta($ruta . $file . "/");
                }
            }
            closedir($dh);
        }
    }else
        echo "<br>No es ruta valida";
} >
