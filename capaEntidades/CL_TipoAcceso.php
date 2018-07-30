<?php

/**
 * Description of CL_TipoAcceso
 * @author 
 */
class CL_TipoAcceso {
    
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
