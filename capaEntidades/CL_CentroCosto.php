<?php

/**
 * Description of CL_CentroCosto
 * @author 
 */
class CL_CentroCosto {
   
    private $id;
    private $descripcion;
    
    function __construct() {
      
    }
    
    function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



    
}
