<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 18/11/2017
 * Time: 17:32
 */
if (isset($_POST['nom']) && isset($_POST['msg'])) {
    $FILE = "datos.txt";
    $fichero = fopen($FILE, "a") or die("No se puede abrir");
    $string = '------------------------------------------------------' . PHP_EOL;
    $string .= $_POST['nom'] . PHP_EOL;
    $string .= $_POST['msg'] . PHP_EOL;
    $string .= '------------------------------------------------------' . PHP_EOL;
    fwrite($fichero, $string);
    fclose($fichero);
}
?>
<html>
<body>
<form action="" method="post">
    Introduzca su nombre: <br/>
    <input type="text" name="nom" id="nom"/> <br/>
    Comentarios sobre esta página web: <br/>
    <textarea name="msg" id="msg" cols="30" rows="10"></textarea> <br/>
    <input type="submit" value="Enviar"/>
</form>
</body>
</html>