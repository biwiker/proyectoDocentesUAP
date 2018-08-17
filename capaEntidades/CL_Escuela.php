<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CL_Escuela
 *
 * @author Eliseo
 */
class CL_Escuela {
    private $_descripcion;
    private $_idEscuela;
    
    function __construct() {}
    
    function getDescripcion() {
        return $this->_descripcion;
    }

    function getIdEscuela() {
        return $this->_idEscuela;
    }

    function setDescripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }

    function setIdEscuela($_idEscuela) {
        $this->_idEscuela = $_idEscuela;
    }



}
