<?php

class SegundaClasse {
    // Declarar atributo
    public $idade;

    // Delcarar métodos
    public function __construct($idade) {
        $this->idade = $idade;
    }

    public function MostraIdade() {
        echo "<br>Esse é minha idade: " . $this->idade;
    }
}
