<?php

class Fabricante {

    // Declara os atributos
    public $Id;
    public $NomeFantasia;
    public $Telefone;
    public $Email;

    // Declaar os metodos
    function __construct($Id, $NomeFantasia, $Telefone, $Email) {
        $this->Id = $Id;
        $this->NomeFantasia = $NomeFantasia;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
    }
    
    function getId() {
        return $this->Id;
    }

    function getNomeFantasia() {
        return $this->NomeFantasia;
    }

    function getTelefone() {
        return $this->Telefone;
    }

    function getEmail() {
        return $this->Email;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }


    
    

}
