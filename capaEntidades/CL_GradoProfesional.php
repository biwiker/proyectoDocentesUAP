<?php


class CL_GradoProfesional {

    private $_idGradoProfesional;
    private $_descripcion;
    
    function __construct() {
        
    }
    
    function getIdGradoProfesional() {
        return $this->_idGradoProfesional;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    function setIdGradoProfesional($_idGradoProfesional) {
        $this->_idGradoProfesional = $_idGradoProfesional;
    }

    function setDescripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }


}
