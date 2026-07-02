<?php

require_once "../clases/persona.php";

$persona1 = new Persona("Luis", "Gomez", 19, "luisangelgomezsaavedra28@gmail.com");
$persona2 = new Persona("Angel", "Saavedra", 20, "angelsaavedra28@gmail.com");


 echo $persona1->saludar();
 echo $persona2->saludar();
