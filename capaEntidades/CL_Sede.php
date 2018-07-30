<?php

/**
 * Description of CL_Sede
 * @author 
 */
class CL_Sede {
    
    private $id_sede;
    private $descripcion;
    
    function __construct() {
        
    }
    
    
    function getId_sede() {
        return $this->id_sede;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_sede($id_sede) {
        $this->id_sede = $id_sede;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



    
}
