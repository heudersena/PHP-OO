<?php

include './Classes/FinanciamentoCarro.class.php';
include './Classes/FinanciamentoMoto.class.php';

$carro = new FinanciamentoCarro(10000);
$carro->CalcularJuros();
echo "<hr>";
$moto = new FinanciamentoMoto($valor);
$moto->CalcularJuros();