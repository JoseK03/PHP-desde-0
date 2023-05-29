<?php
if($_POST){

    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];

    echo "Hola ". $txtNombre."". $txtApellido;
}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio5.php" method="post">
    <label for="">Nombre:</label>
    <input type="text" name="txtNombre" required="">
    <br>
    <label for="">Apellido:</label>
    <input type="text" name="txtApellido" required="">
    <br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>