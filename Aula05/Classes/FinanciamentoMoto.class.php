<?php 

class FinanciamentoMoto extends FinanciamentoCarro{

	function CalcularJuros(){
		echo "Total de Juros (moto): ". $this->valorFinanciamento * 0.5; //Taxa de juros de 50%;
	}
}