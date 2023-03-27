<?php

include("encapsulamiento.php");

 $ferrari = new carro();

 echo $ferrari->llave."<br>";
 $ferrari->encender();

 $ferrari->nombrePropietario = "Danny Neme Cantillo";
 $ferrari->emitirMulta("$530.000");

 $ferrari->mostrarMulta();

?>