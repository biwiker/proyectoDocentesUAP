<?php

session_start();

if ($_SESSION['nombre_usuario']) {

    session_write_close();
    session_destroy();

    header("location: ../capaPresentacion/V_Login");
} else {

    header("location: ../capaPresentacion/V_Login");
}
?>

