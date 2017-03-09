<?php

$v1=$_GET['valor1'];
$v2=$_GET['valor2'];
$total=$v1+$v2;

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <form>
        Valor 1<input type="text" name="valor1">
        Valor 2<input type="text" name="valor2">
        <button type="submit" class="btn btn-success">Enviar</button>

        <?= $total ?>

        </form>
    </body>
</html>