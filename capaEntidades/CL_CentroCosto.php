<?php

/**
 * Description of CL_CentroCosto
 * @author 
 */
class CL_CentroCosto {
   
    private $_idCentroCosto;
    private $_descripcion;
    
    function __construct() {
      
    }
    
    function getIdCentroCosto() {
        return $this->_idCentroCosto;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    function setIdCentroCosto($id) {
        $this->_idCentroCosto = $id;
    }

    function setDescripcion($descripcion) {
        $this->_descripcion = $descripcion;
    }



    
}
