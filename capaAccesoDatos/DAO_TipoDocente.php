<?php

include_once '../capaEntidades/CL_TipoDocente.php';
include_once '../capaConexion/CL_Conexion.php';


class DAO_TipoDocente {

   private $_conexion;

    function __construct() {
        //al crear una instancia de la clase, se obtiene de inmediato el estado de la conexión
        try {
            $this->_conexion = CL_Conexion::getInstancia();
        } catch (Exception $exc) {
            echo 'error al generar la instancia de conexion ' + $exc->getTraceAsString();
        }
    }

    function buscarTipoDocente() {
        try {
            $stmt = $this->_conexion->getConexion()->prepare(" SELECT 
                                                                        ID_TIPO_DOCENTE, 
                                                                        LOWER(DESCRIPCION) 
                                                                FROM TIPO_DOCENTE;");
            $stmt->execute();
            $stmt->bind_result($t_idTipodocente, $t_descripcion);   
            
            $lista = array();
            
            while ($stmt->fetch()) {
                $TipoDocente = new CL_TipoDocente();
                $TipoDocente->setIdTipoDocente($t_idTipodocente);
                $TipoDocente->setDescripcion($t_descripcion);
                
                
                $lista[] = $TipoDocente;
            }
            $stmt->close();
            return $lista;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return null;
        }
    }
}
