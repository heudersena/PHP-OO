<?php

// Exemplo de classe com metodo construtor
class Carro {

// Criação dos atributos
    private $Ano;
    private $Modelo;
    private $Cor;
    private $Fabricante;

    function getAno() {
        return $this->Ano;
    }

    function getModelo() {
        return $this->Modelo;
    }

    function getCor() {
        return $this->Cor;
    }

    function getFabricante() {
        return $this->Fabricante;
    }

    function setAno($Ano) {
        $this->Ano = $Ano;
    }

    function setModelo($Modelo) {
        $this->Modelo = $Modelo;
    }

    function setCor($Cor) {
        $this->Cor = $Cor;
    }

    function setFabricante($Fabricante) {
        $this->Fabricante = $Fabricante;
    }

    // Criar o metodo construtor
    function __construct($ArgumentoAno, $ArgumentoModelo, $ArgumentoCor, $ArgumentoFabricante) {
        $this->Ano = $ArgumentoAno;
        $this->Modelo = $ArgumentoModelo;
        $this->Cor = $ArgumentoCor;
        $this->Fabricante = $ArgumentoFabricante;
    }

    function MostraDados() {
        echo "<strong>Ano:</strong> " . $this->Ano;
        echo "<br>";
        echo "<strong>Modelo:</strong> " . $this->Modelo;
        echo "<br>";
        echo "<strong>Cor:</strong> " . $this->Cor;
        echo "<br>";
        echo "<strong>Fabricante:</strong> " . $this->Fabricante;
    }

    function __destruct() {
        echo "<br>";
        echo "O carro foi destruido com sucesso!";
    }

}
