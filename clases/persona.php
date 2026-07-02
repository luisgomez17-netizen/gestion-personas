<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;


    public function __construct($nombre, $apellido, $edad, $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;


    }
   

    public function saludar()

    {
     return "Mi nombre es: " . $this->nombre . " " . $this->apellido . " tengo " . $this->edad . " años. Mi correo es: " . $this->correo . "<br>";
     return "Mi nombre es: " . $this->nombre . " " . $this->apellido . "tengo" . $this->edad . "años. Mi correo es: " . $this->correo . "<br>";
    }
}