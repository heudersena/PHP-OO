<?php
include 'Carro.class.php';
class CarroImpostos extends Carro{

	// Declarar atributos

	public $IPVA;
	public $IPI;

	// Criar os Metodos

	function __construct($ArgumentoAno, $ArgumentoModelo, $ArgumentoCor, $ArgumentoFabricante,$ArgumentoIPVA, $ArgumentoIPI){
		// O parent faz referencia aos atributos da class pai ( Carro );
		parent::__construct($ArgumentoAno, $ArgumentoModelo, $ArgumentoCor, $ArgumentoFabricante);
		$this->IPVA=$ArgumentoIPVA;
		$this->IPI=$ArgumentoIPI;
	}

	function MostraDados(){
		parent::MostraDados();
		echo "<br>";
		echo "<strong>IPVA: </strong>".$this->IPVA;
		echo "<br>";
		echo "<strong>IPI:</strong> ".$this->IPI;
	}
}