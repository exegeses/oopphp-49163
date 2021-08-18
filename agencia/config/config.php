<?php

    #### configuración general de sistema  ####
    session_start();


    function mostrar($dato)
    {
        echo '<pre>';
        print_r($dato);
        echo '</pre>';
    }