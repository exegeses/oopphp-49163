<?php
    require 'config/config.php';
    $Region = new Region;
    $chequeo = $Region->eliminarRegion();

    $css = 'danger';
    $mensaje = 'No se pudo eliminar la región';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Región '.$Region->getRegNombre().' eliminada correctamente';
    }

    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Baja de una región</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminRegiones.php" class="btn btn-light ml-2">
                volver a panel
            </a>
        </div>

    </main>

<?php
    include 'includes/footer.php';
?>