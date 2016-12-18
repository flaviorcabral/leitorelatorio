<?php
    require '../config.php';

    $c = new Controller();
    $c->manipulador();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manipulando relatorio</title>

    </head>
    <body>
    <div>
        <p style="font-size: larger">Manipulando relatorio minerando informações e persistir no db</p>
    </div>
    <form method="post" enctype="multipart/form-data">
        Selecione arquivo:
        <input type="file" name="relatorio" id="fileToUpload">
        <input type="hidden" name="upload" value="processar">
        <input type="submit" value="Enviar">
    </form>
    </body>
</html>
