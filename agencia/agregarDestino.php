<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $chequeo = $Destino->agregarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Alta de una destino</h1>

        <?php
            $mensaje = 'No se pudo agregar el destino';
            $css     = 'danger';
            if( $chequeo ){
                $mensaje = 'Destino '.$Destino->getDestNombre().' agregada correctamente';
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