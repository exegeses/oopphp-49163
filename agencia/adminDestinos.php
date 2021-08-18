<?php
//    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de destinos</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre de Destino</th>
                <th>Región</th>
                <th>Precio</th>
                <th>Asientos</th>
                <th>Disponibles</th>
                <th colspan="2">
                    <a href="formAgregarDestino.php" class="btn btn-outline-secondary">
                        Agregar <i class="far fa-plus-square ml-1"></i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>region</td>
                <td>$percio</td>
                <td>asientos</td>
                <td>disponibles</td>
                <td>
                    <a href="formModificarDestino.php" class="btn btn-outline-secondary">
                        Modificar <i class="far fa-edit ml-1"></i>
                    </a>
                </td>
                <td>
                    <a href="formEliminarDestino.php" class="btn btn-outline-secondary">
                        Eliminar <i class="far fa-minus-square ml-1"></i>
                    </a>
                </td>
            </tr>

            </tbody>
        </table>

        </main>

<?php
    include 'includes/footer.php';
?>