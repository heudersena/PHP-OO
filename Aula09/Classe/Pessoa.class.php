<?php

class Pessoa {

    // Declara os atributos
    private $Nomes;
    private $Sobrenome;
    
    // Declarar os métodos
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

}
