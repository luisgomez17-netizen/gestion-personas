<?php

class producto
{
    public $nombre;
    public $marca;
    public $precio;
    public $categoria;

    public function __construct($nombre, $marca, $precio, $categoria)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }
    public function saludar()
    {
       return "El producto es un " . $this->nombre . " de la marca " . $this->marca . ", cuesta " . $this->precio . " y pertenece a la categoría " . $this->categoria . ".<br>";
    }
 }
