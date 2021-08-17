<?php

########### conexion
    $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
                );
########### fin conexion
########### region
    $sql = "SELECT regID, regNombre
                FROM regiones";

## preparar statement
    $stmt = $link->prepare($sql);

## ejecutar
    $stmt->execute();
    $regiones = $stmt->fetchAll();
########### fin region

########### listar registros
    foreach ( $regiones as $region ){
        echo $region['regID'], ':', $region['regNombre'], '<br>';
    }