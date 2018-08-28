<?php

@session_start();

//Se detecta Movimiento o Escritura (Para Matar la sesion por inactividad)
if ($_SESSION['nombre_usuario']) {

    session_write_close();
    session_destroy();

    header("location: ../capaPresentacion/V_Login");
} else {

    header("location: ../capaPresentacion/V_Login");
}
?>

