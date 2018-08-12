<?php

session_start();

if ($_SESSION['nombre_usuario']) {

    session_destroy();

    header("location: ../capaPresentacion/V_Login");
} else {

    header("location: ../capaPresentacion/V_Login");
}
?>

