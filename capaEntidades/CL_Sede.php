<?php

/**
 * Description of CL_Sede
 * @author 
 */
class CL_Sede {
    
    private $_idSede;
    private $_descripcion;
    
    function __construct() {
        
    }
    
    
    function getId_sede() {
        return $this->_idSede;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    function setId_sede($id_sede) {
        $this->_idSede = $id_sede;
    }

    function setDescripcion($descripcion) {
        $this->_descripcion = $descripcion;
    }



    
}
