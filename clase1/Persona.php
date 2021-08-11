<?php

    class Persona
    {
        ##### atributos
        private $nombre;
        private $apellido;

        ##### métodos
        public function verDatos()
        {
            $aux  = 'Nombre: '.$this->nombre.'<br>';
            $aux .= 'Apellido: '.$this->apellido.'<br>';
            return $aux;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

    }