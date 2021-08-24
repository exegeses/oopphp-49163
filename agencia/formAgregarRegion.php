<?php

    //require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
    
    <main class="container">
            <h1>Alta de una nueva región</h1>

            <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

                <form action="agregarRegion.php" method="post">

                    <div class="form-group">
                    <label for="regNombre">Nombre de la región:</label>
                    <input type="text" name="regNombre" 
                           id="regNombre" class="form-control">
                    </div>

                    <button class="btn btn-dark">Agregar región</button>
                    <a href="adminRegiones.php" class="btn btn-outline-secondary">
                        Volver a panel de regiones
                    </a>
                </form>

            </div>


    </main>
<?php
    include 'includes/footer.php';
?>