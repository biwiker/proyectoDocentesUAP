<?php

/**
 * Description of CL_SedeCarga
 * @author 
 */
class CL_SedeCarga {
    
    private $id_sede;
    private $id_docente;
    
    function __construct() {
        
    }
    
    function getId_sede() {
        return $this->id_sede;
    }

    function getId_docente() {
        return $this->id_docente;
    }

    function setId_sede($id_sede) {
        $this->id_sede = $id_sede;
    }

    function setId_docente($id_docente) {
        $this->id_docente = $id_docente;
    }



    
}
