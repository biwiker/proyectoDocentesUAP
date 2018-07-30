<?php

/**
 * Description of CL_Conexion
 *
 * @author Eliseo
 */
include_once("CL_Configuracion.php");

class CL_Conexion {

    private $_conexion;    
    static private $instancia = null;

    #patron singleton para instanciar solo 1 vez la clase conexion 
    #método estático para acceder a él sin necesidad de instanciar la clase
    public static function getInstancia() {
        if (self::$instancia == null) {
            self::$instancia = new CL_Conexion();
        }
        return self::$instancia;
    }

    #constructor de la clase
    public function CL_Conexion() {
        $this->abrirConexion();
    }

    #conectarse al servidor
    public function abrirConexion() {
        if (!isset($this->_conexion)) {
            $this->_conexion = (mysql_connect(HOST, USER, PASS));
            if (!$this->_conexion) {
                trigger_error('Error al conectar al servidor mysql: ' . mysql_error(), E_USER_ERROR);
            }
        }

        if (!mysql_select_db(DBNAME, $this->_conexion)) {
            trigger_error('Error al Seleccionar a la base de datos: ' . mysql_error(), E_USER_ERROR);
        }
    }

    #recuperar el estado de la conexion
    function getConexion() {
        return $this->_conexion;
    }

}
