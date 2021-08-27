<?php
namespace ExemploOO;

class Livro implements \JsonSerializable {
    private $titulo;
    private $genero;

    public function setTitulo($titulo) {
        if($titulo != '')
            $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setGenero($genero) {
        if($genero != '')
            $this->genero = $genero;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function jsonSerialize() {
        return [
            'titulo' => $this->getTitulo(),
            'genero' => $this->getGenero()
        ];
    }

    public function __construct($titulo = '', $genero = '') {
        $this->setTitulo($titulo);
        $this->setGenero($genero);
    }
}