<?php

include_once '../capaEntidades/CL_CentroCosto.php';
include_once '../capaConexion/CL_Conexion.php';

class DAO_CentroCosto {
    
        //variable para almacenar el estado de la conexion
        private $_conexion;

    function __construct() {
        //al crear una instancia de la clase, se obtiene de inmediato el estado de la conexión
        try {
            $this->_conexion = CL_Conexion::getInstancia();
        } catch (Exception $exc) {
            echo 'error al generar la instancia de conexion ' + $exc->getTraceAsString();
        }
    }

    function buscarCentroCosto() {
        try {
            $stmt = $this->_conexion->getConexion()->prepare(" SELECT 
                                                                        ID_CENTRO_COSTO, 
                                                                        DESCRIPCION 
                                                                FROM CENTRO_COSTO;");
            $stmt->execute();
            $stmt->bind_result($c_idCentroCosto, $c_descripcion);
            
            $lista = array();
            
            while ($stmt->fetch()) {
                $CentroCosto = new CL_CentroCosto();
                $CentroCosto->setIdCentroCosto($c_idCentroCosto);
                $CentroCosto->setDescripcion($c_descripcion);
                
                
                $lista[] = $CentroCosto;
            }
            $stmt->close();
            return $lista;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return null;
        }
    }

}
