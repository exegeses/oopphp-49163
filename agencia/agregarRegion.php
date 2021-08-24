<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->agregarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Alta de una región</h1>

        <?php
            $mensaje = 'No se pudo agregar la región';
            $css     = 'danger';
            if( $chequeo ){
                $mensaje = 'Región '.$Region->getRegNombre().' agregada correctamente';
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