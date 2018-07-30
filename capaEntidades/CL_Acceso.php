<?php

/**
 * Description of CL_Acceso
 * @author 
 */
class CL_Acceso {
    
    private $rut;
    private $password;
    
    function __construct() {
       
    }
    
    function getRut() {
        return $this->rut;
    }

    function getPassword() {
        return $this->password;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setPassword($password) {
        $this->password = $password;
    }



    
}
