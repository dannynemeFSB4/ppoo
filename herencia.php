<?php

class Animal {

    public $tamanio = "20 cms";

    public function correr(){
        echo "Velocidad promedio de una animal 10 Km/h <br>";

    }
}

class Perro extends Animal { 

    public function vigilar(){
        echo "Vigilar hogar <br>";
    }
}

class Gato extends Animal{

    public function dormir(){
        echo "Dormir todo el dia <br>";
    }
}

$miPerro= new Perro();
$miGato= new Gato();

$miPerro->vigilar();
$miGato->dormir();

$miPerro->correr();
$miGato->correr();

echo $miPerro->tamanio;

?>