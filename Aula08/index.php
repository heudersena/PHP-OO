<?php

// Associaçao
include_once './Classe/Carro.class.php';
include_once './Classe/Fabricante.class.php';

$Fabricante = new Fabricante(1548, 'Ford', '(61)9 93029884', 'contato@ford.com.br');
$Carro = new Carro('1254', 'Fusion', '200.000', $Fabricante);

echo $Carro->Id;
echo '<br>';
echo $Carro->NomeCarro;
echo '<br>';
echo $Carro->Fabricante->NomeFantasia;
echo '<br>';
echo $Carro->Fabricante->Email;
