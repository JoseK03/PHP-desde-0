<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="hola,saludo a todo el mundo";

$archivoACrear=fopen($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);
fclose($archivoACrear);


?>