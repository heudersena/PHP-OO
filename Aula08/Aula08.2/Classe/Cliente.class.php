<?php
include_once 'Contato.class.php';
class Cliente {

    // 1º Passo: Declarar os Atributos
    public $Id;
    public $Endereco;
    public $Contato;

    // 2ºPasso: Declarar Metodos
    function __construct() {
        // A grande sacada e instanciar a class pai na filha
        $this->Contato = new Contato();
    }

    public function setContato($Nome, $Email, $Telefone, $Celular) {
        $this->Contato->setContato($Nome, $Email, $Telefone, $Celular);
    }
    
     public function MostraContato() {
         $this->Contato->MostraContato();
    }


}
