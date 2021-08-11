<?php
    require 'Persona.php';
    ### instanciación
    $Persona = new Persona;

    ## asignación pública
    //$Persona->nombre = 'jtrdhghnfd6857';
    $Persona->setNombre('Ronnie');
    $Persona->setApellido('Woods');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Document</title>
    </head>
    <body>
        <h1>Vista Persona</h1>

            <pre>
            <?php
                print_r($Persona)
            ?>
            </pre>

            <div class="objeto">
                <?= $Persona->verDatos() ?>
            </div>

    </body>
</html>