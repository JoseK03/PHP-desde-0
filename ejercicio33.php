<?php

$jsonContenido = '[

    {"nombre":"jose", "apellido":"vargas"},
    {"nombre":"daniel", "apellido":"santos"}
]';

$resultado= json_decode($jsonContenido);
/* print_r($resultado); */

foreach($resultado as $persona){
    
    echo "$persona-nombre". "$persona->apellido"."<br>";
}

?>