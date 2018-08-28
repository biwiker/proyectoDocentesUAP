<?php
include_once '../capaAccesoDatos/DAO_Acceso.php';

//------------------------------------------------------------------------------------------------------
//Acción a realizar cuando se solicita actualizar contraseña
//------------------------------------------------------------------------------------------------------
if (isset($_POST['btnActualizarContrasenia'])) {
    @session_start();
    
    if (!is_null($_SESSION['rut_usuario'])) {
        //se crea una instancia al DAO
        $DAO_Acceso = new DAO_Acceso();
        
        $_rut               = $_SESSION['rut_usuario'];
        $_actualContrasenia = $_POST['txtActualContrasenia'];
        $_nuevaContrasenia  = $_POST['txtNuevaContrasenia2'];
        
        //se envian los datos al procedimiento para ejecutar la actualización de la contraseña
        if($DAO_Acceso->actualizarContrasenia($_rut,$_actualContrasenia,$_nuevaContrasenia) > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
    
}
