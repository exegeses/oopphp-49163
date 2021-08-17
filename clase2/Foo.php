<?php

    class Foo
    {
        private $dato;

        private function __construct($dato)
        {
            //acciones al instanciar
            $this->setDato($dato);
            echo 'método contructor <br>';
        }
        public function publico()
        {
            echo 'método público <br>';
        }

        private function privado()
        {
            echo 'método privado <br>';
        }

        static function estatico()
        {
            echo 'método estático <br>';
        }


        /**
         * @return mixed
         */
        public function getDato()
        {
            return $this->dato;
        }

        /**
         * @param mixed $dato
         */
        public function setDato($dato)
        {
            $this->dato = $dato;
        }

    }

#####################################
##### mientras tanto, en otro archivo
    //$Foo = new Foo('azul');
    //$Foo->setDato('info enviada');
    //echo $Foo->getDato();
    //$Foo->publico();
    //$Foo->privado();

    Foo::estatico();
