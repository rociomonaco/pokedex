<?php
class Pokemon {
    private $id;
    private $nombre;
    private $tipo1;
    private $tipo2;
    private $numero;
    private $img;
    private $descripcion;
    private $peso;
    private $altura;

    public function __construct($id, $nombre, $tipo1, $tipo2, $numero, $img, $descripcion, $peso, $altura) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo1 = $tipo1;
        $this->tipo2 = $tipo2;
        $this->numero = $numero;
        $this->img = $img;
        $this->descripcion = $descripcion;
        $this->peso = $peso;
        $this->altura = $altura;
    }
}