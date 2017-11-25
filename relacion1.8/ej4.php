<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 18/11/2017
 * Time: 17:34
 */

$FILE = "viajes.txt";
$fichero = fopen($FILE, "r+") or die("Unable to open file!");
$string = '';
if ($fichero) {
    $string = '<table>';
    $string .= '<tr><th>Nombre</th><th>Destino</th><th>Duración</th><th>Salida</th></tr>';
    while (($line = fgets($fichero)) !== false) {
        $split = explode(':', $line);
        $string .= "<tr><td>{$split[0]}</td><td>{$split[1]}</td><td>{$split[2]}</td><td>{$split[3]}</td></tr>";
    }
    $string .= '</table>';
    if (isset($_POST['nombre']) && isset($_POST['destino']) && isset($_POST['duracion']) && isset($_POST['dias'])) {
        $newline = $_POST['nombre'] . ':' . $_POST['destino'] . ':' . $_POST['duracion'] . ':' . $_POST['dias'] . PHP_EOL;
        fwrite($fichero, $newline);
    }
    fclose($fichero);
}
?>
<html>
<body>
<?php echo $string; ?>
<form action="" method="post">
    Introduzca el nombre del circuito: <br/>
    <input type="text" name="nombre" id="nombre"/> <br/>
    Introduzca el destino: <br/>
    <input type="text" name="destino" id="destino"/> <br/>
    Introduzca la duración: <br/>
    <input type="text" name="duracion" id="duracion"/> <br/>
    Introduzca los días de salida: <br/>
    <input type="text" name="dias" id="dias"/> <br/>
    <input type="submit" value="Enviar"/>
</form>
</body>
</html>