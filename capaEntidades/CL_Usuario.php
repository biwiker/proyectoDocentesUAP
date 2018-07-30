<?php

/**
 * Description of CL_Usuario
 * @author 
 */
class CL_Usuario {
    
    private $_rut;
    private $_pnombre;
    private $_snombre;
    private $_apellidoP;
    private $_apellidoM;
    private $_correo;
    
    function __construct() {
        
    }

    function getRut() {
        return $this->_rut;
    }

    function getPnombre() {
        return $this->_pnombre;
    }

    function getSnombre() {
        return $this->_snombre;
    }

    function getApellidoP() {
        return $this->_apellidoP;
    }

    function getApellidoM() {
        return $this->_apellidoM;
    }

    function getCorreo() {
        return $this->_correo;
    }

    function setRut($rut) {
        $this->_rut = $rut;
    }

    function setPnombre($pnombre) {
        $this->_pnombre = $pnombre;
    }

    function setSnombre($snombre) {
        $this->_snombre = $snombre;
    }

    function setApellidoP($apellidoP) {
        $this->_apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->_apellidoM = $apellidoM;
    }

    function setCorreo($correo) {
        $this->_correo = $correo;
    }


}
