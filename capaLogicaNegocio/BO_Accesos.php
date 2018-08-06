<?php

include_once '../capaEntidades/CL_Acceso.php';
include_once '../capaAccesoDatos/DAO_Acceso.php';

//se crea una clase de acceso con los datos del login
$CL_Acceso = new CL_Acceso();
$CL_Acceso->setRut($_POST['txtUsuario']);
$CL_Acceso->setPassword($_POST['txtClave']);

//creamos una clase DAO, y le envíamos la clase de acceso creada para obtener un resultado
$DAO_Acceso = new DAO_Acceso();
$_resultado = $DAO_Acceso->login($CL_Acceso);

//si el resultado es distinto de nulo
if (!is_null($_resultado) && $_resultado = 'administrador') {
    header('Location: ../capaPresentacion/V_Administrador.php');
    
}else if (!is_null($_resultado) && $_resultado = 'asesor') {
    header('Location: ../capaPresentacion/V_Administrador.php');
} else {
    header('Location: ../capaPresentacion/V_Login.php');
}
   
   

