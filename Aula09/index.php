<?php

include_once './Classe/Pessoa.class.php';

$pessoa = new Pessoa();
$pessoa->Nome = 'Heuder';
$pessoa->Sobrenome = 'Rodrigues de Sena';

echo $pessoa->Nome . " ";
echo $pessoa->Sobrenome;


