<?php

class Contato {

    // 1º Passo: Declara os atributos
    public $Nome;
    public $Email;
    public $Telefone;
    public $Celular;

    // 2º Passo: Declara os metodos
    // Gravar as informaçoes de contatos
    public function setContato($Nome, $Email, $Telefone, $Celular) {
        $this->Nome = $Nome;
        $this->Email = $Email;
        $this->Telefone = $Telefone;
        $this->Celular = $Celular;
    }

    public function MostraContato() {
        echo $this->Nome;
        echo "<br>";
        echo $this->Email;
        echo "<br>";
        echo $this->Telefone;
        echo "<br>";
        echo $this->Celular;
    }

}
