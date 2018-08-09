<?php

include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';

//if (isset($_POST['btnVerDocente'])) {
//    
    $Docente = new CL_Docente();
    
    $rut = $_POST['txtRut'];
    
    $DAO_Docente = new DAO_Docente();
    $Docente = $DAO_Docente->buscarDocente($rut);
    
    echo $Docente->getRut();
    echo $Docente->getPNombre();
    echo $Docente->getApPaterno();
    echo $Docente->getApMaterno();
    echo $Docente->getCorreo1();
    echo $Docente->getCorreo2();
    echo $Docente->getFonoMovil();
    
     
    
//}


