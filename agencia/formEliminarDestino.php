<?php
    require 'config/config.php';
    $Destino = new Destino;
    $Destino->verDestinoPorID();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Confirmación de baja de un destino</h1>

        <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
            <form action="eliminarDestino.php" method="post">
                <soan class="lead">Se eliminará el destino <?= $Destino->getDestNombre(); ?> </soan>
                <br>
                Region: <?= $Destino::getRegNombre() ?> <br>
                Precio: $<?= $Destino->getDestPrecio() ?> <br>

                <input type="hidden" name="destNombre"
                       value="<?= $Destino->getDestNombre() ?>">
                <input type="hidden" name="destID"
                       value="<?= $Destino->getDestID() ?>">
                <button class="btn btn-danger">
                    Confirmar Baja
                </button>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    Volver a panel de destinos
                </a>
            </form>
        </div>

        <script>
            Swal.fire(
                'Advertencia',
                'Si pulsa el bot´´on "Confirmar baja", se eliminará el destino',
                'warning'
            );
        </script>

    </main>

<?php
    include 'includes/footer.php';
?>