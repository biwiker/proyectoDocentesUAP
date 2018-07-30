<?php

/**
 * Description of CL_TipoAcceso
 * @author 
 */
class CL_TipoAcceso {
    
    private $_id;
    private $_descripcion;
    
    function __construct() {
        
    }

    function getId() {
        return $this->_id;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    function setId($id) {
        $this->_id = $id;
    }

    function setDescripcion($descripcion) {
        $this->_descripcion = $descripcion;
    }


    
}
