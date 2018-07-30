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
        $this->_conexion = CL_Conexion::getInstancia();
    }

    public function login(CL_Acceso $acceso) {
        $rutUsuario = $acceso->getRut();
        $password = $acceso->getPassword();

        //Cambiar consulta si es que no corresponde con la bdd
        $sql = "procedimiento almacenado";

        $resultado = $this->mysqli->query($sql);

        $row = $resultado->fetch_assoc();

        if ($row == null) {
            return null;
        }
        $usuarioValidado = new CL_Acceso();

        //Se revisan los datos que se guardarán en la bdd 
        $usuarioValidado->setRut($row['rut']);
        $usuarioValidado->setPassword($row['contrasenia']);

        return $usuarioValidado;
    }

}
