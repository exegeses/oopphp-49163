<?php

    require 'config/config.php';
    $Region = new Region;
    $registros = $Region->confirmarBaja();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Baja de una región</h1>
        <div class="alert alert-danger col-8 mx-auto p-3">
            <a href="adminRegiones.php" class="btn btn-light">
                Volver a panel
            </a>
<?php
    if( $registros > 0 ){
?>
            No se puede eliminar la región
                <?= $Region->getRegNombre(); ?>
            ya que tiene destinos relacionados.
<?php
    }
    else{
?>
            <form action="eliminarRegion.php" method="post">
                Se eliminará la región <?= $Region->getRegNombre(); ?>
                <input type="hidden" name="regID"
                       value="<?= $Region->getRegID(); ?>">
                <input type="hidden" name="regNombre"
                       value="<?= $Region->getRegNombre(); ?>">
                <button class="btn btn-danger">
                    Confirmar baja
                </button>
                <script>
                    Swal.fire(
                        'Advertencia',
                        'Si pulsa el botón "Confirmar Baja", se eliminará la región seleccionada.',
                        'warning'
                    )
                </script>
            </form>
<?php
    }
?>

        </div>

    </main>

<?php
    include 'includes/footer.php';
?>