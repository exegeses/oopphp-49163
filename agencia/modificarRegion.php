<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->modificarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Modificación de una región</h1>

        <?php
            $mensaje = 'No se pudo modificar la región';
            $css     = 'danger';
            if( $chequeo ){
                $mensaje = 'Región '.$Region->getRegNombre().' modificada correctamente';
                $css     = 'success';
            }
        ?>
        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminRegiones.php" class="btn btn-light">volver a panel</a>
        </div>

    </main>

<?php
    include 'includes/footer.php';
?>