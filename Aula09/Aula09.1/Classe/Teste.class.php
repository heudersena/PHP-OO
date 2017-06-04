<?php

class Teste {

    public function __call($name, $arguments) {
        echo "Você chamou o método: " . $name . " e passou os parametros<pre>" . print_r($arguments, 1) . "<pre>";
    }
}
