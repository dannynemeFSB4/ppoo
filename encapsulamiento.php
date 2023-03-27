<?php

class carro {

    public $llave = "Llave seguridad";
    public $nombrePropietario;
    private $multas;

    public function encender(){
        echo "Encendiendo carro!!! <br>";
        $this->emitirGases();
    }

    public function acelerar(){
        echo "Acelarando carro a 80 Km/h!!! <br>";
    }

    private function emitirGases(){
        echo "Emitiendo gases CO2!!! <br>";
    }

    public function emitirMulta($valorMulta){
        $this->multas = $valorMulta;
    }

    public function mostrarMulta(){

        echo "Nombre del Propietario : ".$this->nombrePropietario."<br>";
        echo "Valor de la multa : ".$this->multas."<br>";
    }

}

$ferrari = new carro();

echo $ferrari->llave."<br>";
$ferrari->encender();

$ferrari->nombrePropietario = "Danny Neme Cantillo";
$ferrari->emitirMulta("$530.000");

$ferrari->mostrarMulta();

?>