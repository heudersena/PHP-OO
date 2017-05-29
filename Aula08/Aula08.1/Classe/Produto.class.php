<?php

class Produto {

    public $ID;
    public $NomeProduto;
    public $Preco;

    function __construct($ID, $NomeProduto, $Preco) {
        $this->ID = $ID;
        $this->NomeProduto = $NomeProduto;
        $this->Preco = $Preco;
    }

    function getID() {
        return $this->ID;
    }

    function getNomeProduto() {
        return $this->NomeProduto;
    }

    function getPreco() {
        return $this->Preco;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setNomeProduto($NomeProduto) {
        $this->NomeProduto = $NomeProduto;
    }

    function setPreco($Preco) {
        $this->Preco = $Preco;
    }

}
