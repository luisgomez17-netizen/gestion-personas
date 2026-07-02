<?php

require_once "../clases/persona.php";

$persona1 = new Persona();
$persona2 = new Persona();

$persona1->nombre = "Luis";
$persona1->apellido = "Gomez";
$persona1->edad = 19;
$persona1->correo = "luisangelgomezsaavedra28@gmail.com";

$persona2->nombre = "Angel";
$persona2->apellido = "Saavedra";
$persona2->edad = 20;
$persona2->correo = "angelsaavedra28@gmail.com";

 echo $persona1->saludar();
 echo $persona2->saludar();
