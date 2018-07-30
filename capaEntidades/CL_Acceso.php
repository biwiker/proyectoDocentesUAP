<?php

/**
 * Description of CL_Acceso
 * @author 
 */
class CL_Acceso {
    
    private $_rut;
    private $_password;
    
    function __construct() {
       
    }
    
    function getRut() {
        return $this->_rut;
    }

    function getPassword() {
        return $this->_password;
    }

    function setRut($rut) {
        $this->_rut = $rut;
    }

    function setPassword($password) {
        $this->_password = $password;
    }



    
}
