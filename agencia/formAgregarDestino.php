<?php

    //require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
    
    <main class="container">
            <h1>Alta de un nuevo destino</h1>

            <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

                <form action="agregarDestino.php" method="post">

                    <div class="form-group">
                    <label for="destNombre">Nombre del Destino:</label>
                    <input type="text" name="destNombre" 
                           id="destNombre" class="form-control"
                           required>
                    </div>

                    <div class="form-group">
                    <label for="regID">Región</label>
                    <select name="regID" id="regID" 
                            class="form-control" required>
                        <option value="">Seleccione una región</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="number" name="destPrecio"
                                   class="form-control" placeholder="Ingrese el precio" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destAsientos"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Totales" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="number" name="destDisponibles"
                                   class="form-control" placeholder="Ingrese cantidad de Asientos Disponibles" required>
                        </div>
                    </div>


                    <button class="btn btn-dark mr-3">Agregar destino</button>
                    <a href="adminDestinos.php" class="btn btn-outline-secondary">
                        Volver a panel de destinos
                    </a>

                </form>

            </div>


    </main>
<?php
    include 'includes/footer.php';
?>