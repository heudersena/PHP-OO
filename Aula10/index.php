<?php

// carregar automaticamente

function __autoload($classe) {
    include_once "Classe/{$classe}.class.php";
}

$PrimeiraClasse = new PrimeiraClasse("Heuder Rodrigues de Sena");
$PrimeiraClasse->MostraNome();


$SegundaClasse = new SegundaClasse(26);
$SegundaClasse->MostraIdade();
