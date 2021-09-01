<?php
    require 'config/config.php';
    $Destino = new Destino;
    $check = $Destino->eliminarDestino();
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el destino';
    if( $check ){
        $css = 'success';
        $mensaje = 'Destino '.$Destino->getDestNombre().' eliminado correctamente';
    }
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Baja de un destino</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminDestinos.php" class="btn btn-light">Volver a panel</a>
        </div>

    </main>

<?php
    include 'includes/footer.php';
?>