<?php

/**
 * Description of CL_Usuario
 * @author 
 */
class CL_Usuario {
    
    private $rut;
    private $pnombre;
    private $snombre;
    private $apellidoP;
    private $apellidoM;
    private $correo;
    
    function __construct() {
        
    }

    function getRut() {
        return $this->rut;
    }

    function getPnombre() {
        return $this->pnombre;
    }

    function getSnombre() {
        return $this->snombre;
    }

    function getApellidoP() {
        return $this->apellidoP;
    }

    function getApellidoM() {
        return $this->apellidoM;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setPnombre($pnombre) {
        $this->pnombre = $pnombre;
    }

    function setSnombre($snombre) {
        $this->snombre = $snombre;
    }

    function setApellidoP($apellidoP) {
        $this->apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->apellidoM = $apellidoM;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }


}
