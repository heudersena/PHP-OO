<?php

class Versoes {

    // Propiedade estatica
    public static $rodape = 'ERP | v.1.0 | Desenvolvido por Heuder R. Sena';

    // Metodo Estatico
    static function MostrarDados() {
        echo self::$rodape;
    }

}
