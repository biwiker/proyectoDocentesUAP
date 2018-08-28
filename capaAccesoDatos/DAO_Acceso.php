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
            echo 'error al generar la instancia de conexion ' + $exc->getTraceAsString();
        }
    }

    public function login(CL_Acceso $acceso) {

        try {
            $us = $acceso->getRut();
            $pass = $acceso->getPassword();

            $stmt = $this->_conexion->getConexion()->prepare('SELECT FN_OBTENER_TIPO_USUARIO ( ? , ? )'); //se llama a la función almacenada
            $stmt->bind_param('ii', $us, $pass);  //se reemplazan los argumentos por parámetros de tipo entero int ('i')
            $stmt->execute();                     //se ejecuta la consulta  
            $stmt->bind_result($tipo_usuario);    //se enlaza el retorno de la función a una variable bind

            while ($stmt->fetch()) {
                if ($tipo_usuario != null) {
                    return $tipo_usuario;
                } else {
                    return null;
                }
            }
            $stmt->close();
        } catch (Exception $exc) {
            return null;
        }
    }

    public function nombreUsuario($rut) {

        try {
            $stmt = $this->_conexion->getConexion()->prepare('SELECT FN_OBTENER_NOMBRE_USUARIO ( ? )'); //se llama a la función almacenada
            $stmt->bind_param('i',$rut);  //se reemplazan los argumentos por parámetros de tipo entero int ('i')
            $stmt->execute();                     //se ejecuta la consulta  
            $stmt->bind_result($nombre_usuario);    //se enlaza el retorno de la función a una variable bind

            while ($stmt->fetch()) {
                if ($nombre_usuario != null) {
                    return $nombre_usuario;
                } else {
                    return null;
                }
            }
            $stmt->close();
        } catch (Exception $exc) {
            return null;
        }
    }

    //Sesion destruida ,falta redireccionar de manera correcta y revisar
    public function cerrarSesion() {
        
        unset($_SESSION['nombre_usuario']); //eliminamos la variable con los datos de usuario;
	session_write_close(); //nos asegurmos que se guarda y cierra la sesion
        session_destroy();
    }
    
    public function actualizarContrasenia($_rut,$_actualContrasenia,$_nuevaContrasenia){
        
        try {
            $stmt = $this->_conexion->getConexion()->prepare('CALL SP_ACTUALIZAR_CONTRASENIA ( ? , ? , ? )'); //se llama a la función almacenada
            $stmt->bind_param('iss',$_rut,$_actualContrasenia, $_nuevaContrasenia);  
            $filasAfectadas = $stmt->execute();                     
            $stmt->close();
            
            return $filasAfectadas > 0 ? true : false;            
            
        } catch (Exception $exc) {
            return null;
        }
    }

}
