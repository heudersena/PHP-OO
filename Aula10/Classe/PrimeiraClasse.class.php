<?php

class PrimeiraClasse {

    // Declarar atributo
    public $nome;

    // Delcarar métodos
    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function MostraNome() {
        echo "Esse é meu nome: " . $this->nome;
    }

}
