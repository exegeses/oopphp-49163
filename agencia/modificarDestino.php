<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $chequeo = $Destino->modificarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Modificacíon de un destino</h1>

        <?php
            $mensaje = 'No se pudo modificar el destino';
            $css     = 'danger';
            if( $chequeo ){
                $mensaje = 'Destino '.$Destino->getDestNombre().' modificado correctamente';
                $css     = 'success';
            }
        ?>
        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminDestinos.php" class="btn btn-light">volver a panel</a>
        </div>

    </main>

<?php
    include 'includes/footer.php';
?>