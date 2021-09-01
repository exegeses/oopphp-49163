<?php

    class Conexion
    {
        static $link;

        private function __construct()
        {} //impedimos instanciar la clase

        static function conectar()
        {
            if( !isset( self::$link ) ) {
                self::$link = new PDO(
                        'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );
            }
            return self::$link;
        }

    }