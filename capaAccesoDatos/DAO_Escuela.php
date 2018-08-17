<?php

include_once '../capaEntidades/CL_Escuela.php';
include_once '../capaConexion/CL_Conexion.php';

class DAO_Escuela {

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
    
    function buscarEscuela(){
        try {
            $stmt = $this->_conexion->getConexion()->prepare(" SELECT 
                                                                    ID_ESCUELA, 
                                                                    DESCRIPCION 
                                                               FROM ESCUELA_O_PROGRAMA
                                                               WHERE ID_ESCUELA > 0");  
            $stmt->execute();
            return $stmt;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return null;
        }
            
    }
}

