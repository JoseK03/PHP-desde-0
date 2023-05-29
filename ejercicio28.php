<?php

    $servidor="localhost";
    $usuario="campus";
    $contraseña="campus2023";

    try {
        $conexion= new PDO("mysql:host=$servidor;dbname=album",$usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programación', 'foto.jpg')";

        $conexion->exec($sql);

        echo "Conexion Establecida";
    } catch (PDOException $error) {
        echo "Conexion erronea".error;  
    }


?>