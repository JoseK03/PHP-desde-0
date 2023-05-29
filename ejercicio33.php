<?php

$jsonContenido = '[

    {"nombre":"jose", "apellido":"vargas"},
    {"nombre":"daniel", "apellido":"santos"}
]';

$resultado= json_decode($jsonContenido);


foreach($resultado as $persona){
    
    echo ($persona->nombre)." ".($persona->apellido)."<br>";
}

?>