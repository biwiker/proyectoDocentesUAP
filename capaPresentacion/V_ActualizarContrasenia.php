<?php
@session_start();

//si la sessión que contiene el nombre de usuario existe y no está nula, entonces se presenta la gráfica
if (isset($_SESSION['nombre_usuario'])) {
    include_once '../capaAccesoDatos/DAO_Escuela.php';
    ?>
    <html>
        <head>
            <title>Vista_Administrador</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="../css/Estilos_Admin.css" rel="stylesheet" type="text/css">
            <!--  bajar versión local-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </head>
        <body>
            <!--menù lateral para acciones adicionales-->
            <div id="sidebar" class="sidebar">
                <ul class="menu">
                    <li><a href="#"><span class="glyphicon glyphicon-th-large"></span><p>Administrar</p></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span><p>Estad&iacute;sticas</p></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><p>Docentes</p></a></li>
                    <!--<li><a href="#"><span class="glyphicon glyphicon-cog"></span><p>Configuraci&oacute;n</p></a></li>-->
                </ul>

            </div>
            <div id="contenido-total">

                <!-- div de la barra superior -->
                <header class="principal"> 

                    <!--imagen duoc uc-->
                    <div class="logo">
                        <img src="../Imagenes/fondo-transparente_4.png">
                    </div>
                    <div class="info-usuario">
                        <div class="dropdown">

                            <button>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            <!--Opciones de menu--> 
                            <div class="dropdown-content">
                                <a tabindex="-1" href="#">Configuración</a>
                                <a tabindex="-1" href="#">Cambiar contraseña</a>
                                <!--boton que destruye sesion-->
                                <form method="POST" action="../capaLogicaNegocio/BO_Accesos.php">
                                    <button name="btnCerrarSesion" value="Cerrar Sesion">
                                        <a>cerrar sesion</a>
                                    </button>
                                </form>
                            </div>       
                        </div>
                        <div>
                            <!--Mostrar quien es el usuario ingresado en el sistema-->
                            <p>
                                Bienvenido/a a <strong>Duoc UC</strong>
                                <?php echo $_SESSION['nombre_usuario'] ?>
                            </p>
                            <span id="info-usuario-login"></span>
                        </div>

                    </div>
                </header>
                <hr>
                <!--este div contiene el color del sistema-->
                <div class="contenedor" id="contenedor">    
                    <!--div que muestra "adminstrador del sistema"-->
                    <article class="articulo_cambiar_contrasenia">
                        <div class="form-group">
                            <label id="titulo">Cambiar contraseña</label>
                            <p id="subtitulo">Se recomienda usar una contraseña segura que no uses para ningún otro sitio</p>
                        </div>
                        <form action="" method="POST" onsubmit="return validarContrasenia()">    

                            <span id="linea-section-gris-completa"></span>
                            <div class="form-group">
                                <label>Actual contrase&ntilde;a</label>
                                <input type="password" minlength="4" class="form-control" id="txtActualContrasenia" required="true" />
                            </div>
                            <div class="form-group">
                                <label>Nueva contrase&ntilde;a</label>
                                <input type="password" minlength="4" class="form-control" id="txtNuevaContrasenia" required="true"/>
                                <span toggle="#txtNuevaContrasenia" class="glyphicon glyphicon-eye-open toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <label>Repetir Nueva contrase&ntilde;a</label>
                                <input type="password" minlength="4" class="form-control" id="txtNuevaContrasenia2" required="true">
                                <span toggle="#txtNuevaContrasenia2" class="glyphicon glyphicon-eye-open toggle-password"></span>
                            </div>
                            </br>
                            <div class="form-group">

                                <input type="submit" class="form-control" name="btnGuardarCambios" id="btnGuardarCambios" value="Guardar Cambios" >

                            </div>
                        </form>
                    </article>
                </div>
            </div>
            <script>
                $(".toggle-password").click(function () {

                    $(this).toggleClass("glyphicon-eye-close");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") === "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
            </script>
            <script>
                var password = document.getElementById("txtNuevaContrasenia"),
                        confirm_password = document.getElementById("txtNuevaContrasenia2");

                function validatePassword() {
                    if (password.value !== confirm_password.value) {
                        txtNuevaContrasenia2.setCustomValidity("Las contraseñas no coinciden");
                    } else {
                        txtNuevaContrasenia2.setCustomValidity('');
                    }
                }
                txtNuevaContrasenia.onchange = validatePassword;
                txtNuevaContrasenia2.onkeyup = validatePassword;
            </script>
            
        </body>
    </html>
    <?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>
