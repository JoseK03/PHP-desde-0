<?php

$frutas=array("f"=>"fresa","m"=>"manzana","p"=>"pera");

print_r($frutas);

echo $frutas["f"]."<br>";

foreach ($frutas as $indice => $valor) {
     echo $valor."<br>";

     echo $frutas[$indice]."<br>";
}



?>