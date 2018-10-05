<?php


class CL_TipoDocente {
    private $_idTipoDocente;
    private $_descripcion;
    
    function __construct() {
        
    }
    
    function getIdTipoDocente() {
        return $this->_idTipoDocente;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    function setIdTipoDocente($_idTipoDocente) {
        $this->_idTipoDocente = $_idTipoDocente;
    }

    function setDescripcion($_Descripcion) {
        $this->_descripcion = $_Descripcion;
    }


}
