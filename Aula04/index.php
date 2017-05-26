<?php 
// Incluindo a class carro
include './Classes/CarroImpostos.class.php';

// Isntanciando a class carro
$carro = new CarroImpostos('2017','Fusion','Preto','Ford',2000.00,300.00);
$carro->MostraDados();

