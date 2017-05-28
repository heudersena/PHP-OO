<?php
/*
*@author Heuder Rodrigues de Sena
*/
class FinanciamentoCarro{
	// Declarar os atributos
	public $valorFinanciamento;

	// Declarar os metodos

	function __construct($ArgumentoValor){
		$this->valorFinanciamento = $ArgumentoValor;
	}

	function CalcularJuros(){
		echo "Total de Juros: (carro) ". $this->valorFinanciamento * 0.1; //Taxa de juros de 10%
	}
}