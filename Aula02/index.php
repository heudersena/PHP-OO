<?php

	include("Classes/Carro.class.php");
	$carro = new Carro();
	$carro->ano        = "2017";
	$carro->modelo     = "Honda";
	$carro->cor        = "Prata";
	$carro->fabricante = "Honda Civic";

	$carro->MostrarDados();
	//$carro->Ligar();
	$carro->Desligar();