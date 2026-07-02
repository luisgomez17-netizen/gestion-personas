<?php

require_once "../clases/persona.php";
require_once "../clases/producto.php";

$persona1 = new Persona("Luis", "Gomez", 19, "luisangelgomezsaavedra28@gmail.com");
$persona2 = new Persona("Angel", "Saavedra", 20, "angelsaavedra28@gmail.com");


 echo $persona1->saludar();
 echo $persona2->saludar();

echo "<hr>";

$producto1 = new Producto("Teclado Mecánico", "ph", "$45.000", "Tecnología");
$producto2 = new Producto("Tenis", "Nike", "$120.000", "Calzado");

echo $producto1->saludar();
echo $producto2->saludar();