<?php

include_once '../capaEntidades/CL_GradoProfesional.php';
include_once '../capaConexion/CL_Conexion.php';

class DAO_GradoProfesional {

    private $_conexion;

    function __construct() {
        //al crear una instancia de la clase, se obtiene de inmediato el estado de la conexión
        try {
            $this->_conexion = CL_Conexion::getInstancia();
        } catch (Exception $exc) {
            echo 'error al generar la instancia de conexion ' + $exc->getTraceAsString();
        }
    }

    function buscarGradoProfesional() {
        try {
            $stmt = $this->_conexion->getConexion()->prepare(" SELECT 
                                                                        ID_GRADO_PROFESIONAL, 
                                                                        LOWER(DESCRIPCION) 
                                                                FROM GRADO_PROFESIONAL;");
            $stmt->execute();
            $stmt->bind_result($g_idGradoProfesional, $g_descripcion);
            $lista = array();
            
            while ($stmt->fetch()) {
                $GradoProfesional = new CL_GradoProfesional();
                $GradoProfesional->setIdGradoProfesional($g_idGradoProfesional);
                $GradoProfesional->setDescripcion($g_descripcion);
                
                
                $lista[] = $GradoProfesional;
            }
            $stmt->close();
            return $lista;
            return $stmt;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return null;
        }
    }

}
