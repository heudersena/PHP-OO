<?php

include_once 'Versoes.class.php';

class Aplicativos extends Versoes {
    /*
     * Primeiro Passo: Declarar os atributos
     */

    public $NomeAplicativo;

    const TipoLicensa = 'Free';

    /*
     * Segundo Passo: Declarar os metodos
     */

    function __construct($ArgumentoNomeAplicativo) {
        $this->NomeAplicativo = $ArgumentoNomeAplicativo;
        self::TipoLicensa;
    }

    function MostraDados() {
        echo "Nome Aplicativo: " . $this->NomeAplicativo;
        echo "<br>";
        echo "Tipo de Licensa: " . self::TipoLicensa;
        echo "<br>";
        echo "Versao: " . Versoes::Versao;
        echo "<br>";
        echo "Autor: " . Versoes::Autor;
        echo "<br>";
        echo "Data: " . Versoes::data;
        echo "<br>";
        echo "Sistema Operadional: " . Versoes::SO;
    }

}
