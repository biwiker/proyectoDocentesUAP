<?php

/**
 * Description of CL_SedeCarga
 * @author 
 */
class CL_SedeCarga {
    
    private $_idSede;
    private $_idDocente;
    
    function __construct() {
        
    }
    
    function getId_sede() {
        return $this->_idSede;
    }

    function getId_docente() {
        return $this->id_docente;
    }

    function setId_sede($id_sede) {
        $this->_idSede = $id_sede;
    }

    function setId_docente($id_docente) {
        $this->id_docente = $id_docente;
    }



    
}
