<?php

    class Destino
    {
        private $destID;
        private $destNombre;
        private $regID;
        private $destPrecio;
        private $destAsientos;
        private $destDisponibles;
        private $destActivo;

        public function listarDestinos()
        {
            $link = Conexion::conectar();
            /* table relation
            $sql = "SELECT
                        destID, destNombre, 
                        d.regID, regNombre,
                        destPrecio, destAsientos, destDisponibles
                     FROM destinos d, regiones r
                     WHERE d.regID = r.regID";
            */
            $sql = "SELECT destID, destNombre, destPrecio, 
                           destAsientos, destDisponibles, 
                           destActivo, 
                           r.regID, r.regNombre 
                        FROM destinos d 
                        INNER JOIN regiones r 
                        ON d.regID = r.regID";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $destinos = $stmt->fetchAll();
            return $destinos;
        }
    }