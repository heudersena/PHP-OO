<?php

// Agregaçao
include_once './Classe/Carrinho.class.php';

$Produto1 = new Produto(1, 'Notebook Dell', 4500.00);
$Produto2 = new Produto(2, 'Balde', 45.00);

$CarrinhoCompra = new Carrinho();
$CarrinhoCompra->InsereProdruto($Produto1);
$CarrinhoCompra->InsereProdruto($Produto2);
$CarrinhoCompra->ExibirProdutos();
