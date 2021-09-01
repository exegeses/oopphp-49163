<?php

    #### configuración general de sistema  ####
    session_start();

    ################################
    ### autolader
    function autocarga( $nClase )
    {
        require_once 'clases/'.$nClase.'.php';
    }
    spl_autoload_register( 'autocarga' );


    function mostrar($dato)
    {
        echo '<pre>';
        print_r($dato);
        echo '</pre>';
    }