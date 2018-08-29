<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CL_PAD
 *
 * @author Eliseo
 */
class CL_DetallePAD {
    private $_anio;
    private $_semestre;
    private $_porcentaje;
    
    public function __construct() {  }
    
  function get_anio() {
      return $this->_anio;
  }

  function get_semestre() {
      return $this->_semestre;
  }

  function get_porcentaje() {
      return $this->_porcentaje;
  }

  function set_anio($_anio) {
      $this->_anio = $_anio;
  }

  function set_semestre($_semestre) {
      $this->_semestre = $_semestre;
  }

  function set_porcentaje($_porcentaje) {
      $this->_porcentaje = $_porcentaje;
  }


}
