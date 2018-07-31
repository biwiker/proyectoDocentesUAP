<?php

/**
 * Description of DAO_Acceso
 * @author 
 */
#se incluye la clase Conexion
require_once("../capaConexion/CL_Conexion.php");

class DAO_Acceso {

    //variable para almacenar el estado de la conexion
    private $_conexion;

    function __construct() {
        //al crear una instancia de la clase, se obtiene de inmediato el estado de la conexión
        try {
            $this->_conexion = CL_Conexion::getInstancia();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function login(CL_Acceso $acceso) {

        try {
            //parámetros para el procedure
            $rutUsuario = $acceso->getRut();
            $password = $acceso->getPassword();

            //Cambiar consulta si es que no corresponde con la bdd
            $sql = "call buscarCliente('$rutUsuario','$password') ";

            $resultado = $this->mysqli->query($sql);

            $row = $resultado->fetch_assoc();

            if ($row == null) {
                return null;
            }

            //si el usuario existe, se debe retornar el tipo de usuario

            return $usuarioValidado;
        } catch (Exception $exc) {
            return null;
        }
    }

}
