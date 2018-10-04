<!DOCTYPE html>
<?php
@session_start();
?>
<html>
    <head>
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="../css/Estilos_Admin.css" rel="stylesheet" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
        <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
        <script>
            function cargarListadoDocentes() {
                    $.ajax({
                        type: "POST",
                        url: '../capaLogicaNegocio/BO_Docentes.php',
                        data: {'administrarDocentes': 'administrarDocentes'},
                        success: function (response) {
                            $('#contenedor').html(response); //se carga el contenido en el div
                        }
                    });
            }
        
        </script>
        
    </head>

    <body onload="cargarListadoDocentes()">
        
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
                                <a tabindex="-1" href="V_ActualizarContrasenia.php">Cambiar contraseña</a>
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
                
                <!--este div contiene el listar de los docentes-->
                <div class="contenedor" id="contenedor">  
                   
                </div>
            </div>        
       
    </body>
</html>