<?php

    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    require 'clases/Destino.php';
    $Region = new Region;
    $regiones = $Region->listarRegiones();
    $Destino = new Destino;
    $Destino->verDestinoPorID();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
    
    <main class="container">
            <h1>Modificación de un destino</h1>

            <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

                <form action="modificarDestino.php" method="post">

                    <div class="form-group">
                    <label for="destNombre">Nombre del Destino:</label>
                    <input type="text" name="destNombre" 
                           value="<?= $Destino->getDestNombre(); ?>"
                           id="destNombre" class="form-control"
                           required>
                    </div>

                    <div class="form-group">
                    <label for="regID">Región</label>
                    <select name="regID" id="regID" 
                            class="form-control" required>
                        <!--<option value="<?= $Destino->getRegID() ?>"><?= $Destino::getRegNombre() ?></option>-->
                        <option value="">Seleccione una región</option>
            <?php
                    foreach ( $regiones as $region ){
            ?>
                        <option <?= ( $Destino->getRegID() == $region['regID'] )? 'selected' : '' ?> value="<?= $region['regID'] ?>"><?= $region['regNombre'] ?></option>
            <?php
                    }
            ?>
                    </select>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="number" name="destPrecio"
                                   value="<?= $Destino->getDestPrecio(); ?>"
                                   class="form-control" placeholder="Ingrese el precio" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destAsientos"
                                   value="<?= $Destino->getDestAsientos(); ?>"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Totales" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destDisponibles"
                                   value="<?= $Destino->getDestDisponibles(); ?>"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Disponibles" required>
                        </div>
                    </div>

                    <input type="hidden" name="destID"
                           value="<?= $Destino->getDestID() ?>">
                    <button class="btn btn-dark mr-3">Modificar destino</button>
                    <a href="adminDestinos.php" class="btn btn-outline-secondary">
                        Volver a panel de destinos
                    </a>

                </form>

            </div>


    </main>
<?php
    include 'includes/footer.php';
?>