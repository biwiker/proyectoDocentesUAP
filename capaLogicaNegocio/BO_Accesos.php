<?php

include_once '../capaEntidades/CL_Acceso.php';
include_once '../capaAccesoDatos/DAO_Acceso.php';


@session_start();

//si se hace un post en el boton ingreso
if (isset($_POST['btnIngreso'])) {
    
    //se crea una clase de acceso con los datos del login
    $CL_Acceso = new CL_Acceso();
    $CL_Acceso->setRut($_POST['txtUsuario']);
    $CL_Acceso->setPassword($_POST['txtClave']);

    //creamos una clase DAO, y le envíamos la clase de acceso creada para obtener un resultado
    $DAO_Acceso = new DAO_Acceso();
    $_resultado = $DAO_Acceso->login($CL_Acceso);

    //si el resultado es distinto de nulo
    if (!is_null($_resultado) && $_resultado = 'administrador') {
        $_SESSION['nombre_usuario'] = $DAO_Acceso->nombreUsuario($CL_Acceso->getRut()); //se crea una variable de sesión con nombre del usuario 
        header('Location: ../capaPresentacion/V_Administrador.php');

    }else if (!is_null($_resultado) && $_resultado = 'asesor') {
        $_SESSION['nombre_usuario'] = $DAO_Acceso->nombreUsuario($CL_Acceso->getRut()); //se crea una variable de sesión con nombre del usuario 
        header('Location: ../capaPresentacion/V_Administrador.php');
    } else {
         $mensaje="Credenciales Incorrectas";
         include_once '../capaPresentacion/V_Login.php';

    }
}

//si se hace un post en el boton cerrar sesion
if (isset($_POST['btnCerrarSesion'])){
        $DAO_Acceso = new DAO_Acceso();
        $DAO_Acceso->cerrarSesion();
        header('Location: ../capaPresentacion/V_Login.php');
}   

