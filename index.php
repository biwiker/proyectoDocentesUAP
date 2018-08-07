<?php

@session_start();

//según la sesión creada, se carga la página 
if (isset($_SESSION['sesion_acceso']) && (isset($_SESSION['tipo_usuario']) == 'administrador')) {
    header('Location: capaPresentacion/V_Administrador.php');
} else if (isset($_SESSION['sesion_acceso']) && (isset($_SESSION['tipo_usuario']) == 'asesor')) {
    header('Location: capaPresentacion/V_Administrador.php');
} else {
    header('Location: capaPresentacion/V_Login.php');
}



