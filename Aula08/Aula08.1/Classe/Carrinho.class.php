<?php

include_once 'Produto.class.php';

class Carrinho {

    private $itens;

    // Sugestao de Tipo
    public function InsereProdruto(Produto $item) {
        $this->itens[] = $item;
    }

    public function ExibirProdutos() {
        foreach ($this->itens as $item) {
            echo $item->NomeProduto.": ";
            echo $item->Preco."<br>";
        }
    }

}
