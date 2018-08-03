<?php

include_once '../capaEntidades/CL_Acceso.php';
include_once '../capaAccesoDatos/DAO_Acceso.php';

//se crea una clase de acceso con los datos del login
$CL_Acceso = new CL_Acceso();
$CL_Acceso->setRut($_POST['txtUsuario']);
$CL_Acceso->setPassword($_POST['txtClave']);          
($_POST['btnSalir']);

//
$CL_TipoAcceso = new CL_TipoAcceso();
$CL_TipoAcceso->setId();

//creamos una clase DAO, y le envío la clase creada
$DAO_Acceso = new DAO_Acceso();
$resultado = $DAO_Acceso->login($CL_Acceso);
$resultado2 = $DAO_Acceso->login($CL_TipoAcceso);
$resultado3 = $DAO_Acceso->cerrarSesion();



//si el metodo retorna un null
if ($resultado != null) {
    //Se compara el resultado 2(id) con lo que rescató del que ingresó
    if ($resultado2 = $CL_TipoAcceso->getId() == 1) {

        //se redirecciona a la pagina del admin
    } else if ($resultado2 = $CL_TipoAcceso->getId() == 2) {
        
        //se redirecciona a la pagina del asesor
    } else if ($resultado2 = $CL_TipoAcceso->getId() == 3) {
        //se redirecciona a la pagina del login
    } else if ($resultado3 != null) {
        //se redirecciona a la pagina del login
        header("location: index.php");
    }
}
  
   
   
   

