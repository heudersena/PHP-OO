<?php

class Carro {

    // Declara os atributos
    public $Id;
    public $NomeCarro;
    public $Valor;
    public $Fabricante;

    // Declaar os metodos
    function __construct($Id, $NomeCarro, $Valor, $Fabricante) {
        $this->Id = $Id;
        $this->NomeCarro = $NomeCarro;
        $this->Valor = $Valor;
        $this->Fabricante = $Fabricante;
    }
    function getId() {
        return $this->Id;
    }

    function getNomeCarro() {
        return $this->NomeCarro;
    }

    function getValor() {
        return $this->Valor;
    }

    function getFabricante() {
        return $this->Fabricante;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNomeCarro($NomeCarro) {
        $this->NomeCarro = $NomeCarro;
    }

    function setValor($Valor) {
        $this->Valor = $Valor;
    }

    function setFabricante($Fabricante) {
        $this->Fabricante = $Fabricante;
    }



}
