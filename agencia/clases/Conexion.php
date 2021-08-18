<?php

    class Conexion
    {
        private static $link;

        private function __construct()
        {} //impedimos instanciar la clase

        static function conectar()
        {
            $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
            );
            return $link;
        }

    }