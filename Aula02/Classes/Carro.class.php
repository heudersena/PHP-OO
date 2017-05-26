<?php

Class Carro{

	// Criação dos atributos
	public $ano;
	public $modelo;
	public $cor;
	public $fabricante;

	// Criação dos Métodos
	function MostrarDados(){
		echo "Ano: " . $this->ano;
		echo "<br>";
		echo "Modelo: " . $this->modelo;
		echo "<br>";
		echo "Cor: " . $this->cor;
		echo "<br>";
		echo "Fabricante: " . $this->fabricante;
	}

	function Ligar(){
		echo "<br>";
		echo "O carro foi ligado!";
	}
	function Desligar(){
		echo "<br>";
		echo "O carro foi desligado!";
	}


}