<?php

class persona{

    public $nombre; //propiedades

    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function asignaNombre($nuevoNombre){  //acciones o metodos...

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "hola soy ". $this->nombre;
    }
    public function mostrarNombre(){
        $this->edad = 20;
        return $this->edad;
    }
}


$objetoAlumno = new persona("el pepe"); //intancia o creacion de un objeto
/* $objetoAlumno->asignaNombre("Jose"); */ //llamando un metodo
$objetoAlumno->imprimirNombre();//llamar 




?>