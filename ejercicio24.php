<?php

class persona{

    public $nombre; //propiedades

    private $edad;
    protected $altura;

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


$objetoAlumno = new persona(); //intancia o creacion de un objeto
$objetoAlumno->asignaNombre("Jose"); //llamando un metodo



$objetoAlumno2 = new persona();
$objetoAlumno2->asignaNombre("daniel");
$objetoAlumno2->imprimirNombre();

echo $objetoAlumno->nombre;


echo $objetoAlumno2->nombre;
echo $objetoAlumno2->mostrarNombre();
echo $objetoAlumno2->altura;

?>