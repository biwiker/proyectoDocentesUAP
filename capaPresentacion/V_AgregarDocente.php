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
        <link rel="stylesheet" type="text/css" href="../bootstrap 3/css/Formato_tabla.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
        <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>



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
        </div>


        <div class="container col-lg-6 " >
            <table align="center" class="formulario" >
                <form action="../capaLogicaNegocio/BO_Docentes.php" method="POST">
                <tbody>
                
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Rut del docente: </b></td>
                        <td <input type="number" name="txtRut" ></td>
                        <td style="background-color: #F4F6F7"<b>DV del docente: </b></td>
                        <td <input type="number" name="txtDv" ></td>
                        <td style="background-color: #F4F6F7"<b>Id Duoc del docente: </b></td>
                        <td <input type="number" name="txtIdDuoc" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Primer Nombre del docente: </b></td>
                        <td <input type="text" name="txtPNombre" ></td>
                        <td style="background-color: #F4F6F7"<b>Segundo Nombre del docente: </b></td>
                        <td <input type="text" name="txtSNombre" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Tercer Nombre del docente: </b></td>
                        <td <input type="text" name="txtTNombre" ></td>
                        <td style="background-color: #F4F6F7"<b>Apellido Paterno del docente: </b></td>
                        <td <input type="text" name="txtApPaterno" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Apellido Materno del docente: </b></td>
                        <td <input type="text" name="txtApMaterno" ></td>
                        <td style="background-color: #F4F6F7"<b>Año de ingreso: </b></td>
                        <td <input type="number" name="txtAnioIngreso" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Correo 1 del docente: </b></td>
                        <td <input type="text" name="txtCorreo1" ></td>
                        <td style="background-color: #F4F6F7"<b>Correo 2 del ingreso: </b></td>
                        <td <input type="number" name="txtCorreo2" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Telefono Fijo del docente: </b></td>
                        <td <input type="text" name="txtTelefonoFijo" ></td>
                        <td style="background-color: #F4F6F7"<b>Telefono Movil del ingreso: </b></td>
                        <td <input type="number" name="txtTelefonoMovil" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Escuela del docente: </b></td>
                        <td <input type="text" name="txtEscuelaPrograma" ></td>
                        <td style="background-color: #F4F6F7"<b>Centro Costo del docente: </b></td>
                        <td <input type="number" name="txtCentroCosto" ></td>
                    </tr>
                    <tr>
                        <td style="background-color: #F4F6F7"<b>Tipo del docente: </b></td>
                        <td <input type="text" name="txtTipoDocente" ></td>
                        <td style="background-color: #F4F6F7"<b>Grado Profesional del ingreso: </b></td>
                        <td <input type="number" name="txtGradoProfesional" ></td>
                        <input type="submit" name="btnAgregarDocente" >
                    </tr>
                   
                   
                </tbody>
                 </form>
            </table>
        </div>

    </body>
</html>