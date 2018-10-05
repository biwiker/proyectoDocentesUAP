<!DOCTYPE html>
<?php
@session_start();
if (isset($_SESSION['nombre_usuario'])) {
    include_once '../capaAccesoDatos/DAO_Escuela.php';
    include_once '../capaAccesoDatos/DAO_CentroCosto.php';
    include_once '../capaAccesoDatos/DAO_GradoProfesional.php';
    include_once '../capaAccesoDatos/DAO_TipoDocente.php';
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
                <form action="../capaLogicaNegocio/BO_Docentes.php" method="POST">
                    <table align="center" class="formulario"  >
                        <tbody>

                            <tr>
                                <td ><p>Rut del docente: </p></td>
                                <td><input type="number" name="txtRut" maxlength="8" /></td>
                                <td ><p>DV del docente: </p></td>
                                <td> <input type="number" name="txtDv" /></td>
                                <td ><p>Id Duoc del docente: </p></td>
                                <td> <input type="number" name="txtIdDuoc" ></td>
                            </tr>
                            <tr>
                                <td ><p>Primer Nombre del docente: </p></td>
                                <td> <input type="text" name="txtPNombre" ></td>
                                <td ><p>Segundo Nombre del docente: </p></td>
                                <td> <input type="text" name="txtSNombre" ></td>
                            </tr>
                            <tr>
                                <td ><p>Tercer Nombre del docente: </p></td>
                                <td> <input type="text" name="txtTNombre" ></td>
                                <td ><p>Apellido Paterno del docente: </p></td>
                                <td> <input type="text" name="txtApPaterno" ></td>
                            </tr>
                            <tr>
                                <td ><p>Apellido Materno del docente: </p></td>
                                <td> <input type="text" name="txtApMaterno" ></td>
                                <td ><p>Año de ingreso: </p></td>
                                <td> 
                                    <select name="ddlAnioIngreso">
                                        <?php
                                        //se genera una lista de años hasta el año de la fecha actual
                                        for ($x = 2000; $x <= date("Y"); $x++) {
                                            echo "<option value='" . $x . "'>" . $x . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> <p>Correo 1 del docente: </p></td>
                                <td> <input type="text" name="txtCorreo1" ></td>
                                <td> <p>Correo 2 del ingreso: </p></td>
                                <td> <input type="number" name="txtCorreo2" ></td>
                            </tr>
                            <tr>
                                <td ><p>Telefono Fijo del docente: </p></td>
                                <td> <input type="text" name="txtTelefonoFijo" ></td>
                                <td ><p>Telefono Movil del ingreso: </p></td>
                                <td> <input type="number" name="txtTelefonoMovil" ></td>
                            </tr>
                            <tr>
                                <td ><p>Escuela del docente: </p></td>
                                <td>
                                    <select name="ddlEscuela" id="ddlEscuela">
                                        <?php
                                        $DAO_Escuela = new DAO_Escuela();
                                        $listaEscuelas = $DAO_Escuela->buscarEscuela();
                                        foreach ($listaEscuelas as $escuela) {
                                            echo "<option value='" . $escuela->getIdEscuela() . "'>" . $escuela->getDescripcion() . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td ><p>Centro Costo del docente: </p></td>
                                <td>
                                    <select name="ddlCentroCosto" id="ddlCentroCosto">
                                        <?php
                                        $DAO_CentroCosto = new DAO_CentroCosto();
                                        $listaCC = $DAO_CentroCosto->buscarCentroCosto();
                                        foreach ($listaCC as $cc) {
                                            echo "<option value='" . $cc->getIdCentroCosto() . "'>" . $cc->getDescripcion() . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td ><p>Tipo del docente: </p></td>
                                <td>
                                    <select name="ddlTipodocente" id="ddlTipodocente">
                                        <?php
                                        $DAO_Tipodocente = new DAO_Tipodocente();
                                        $listaTD = $DAO_Tipodocente->buscarTipoDocente();
                                        foreach ($listaTD as $td) {
                                            echo "<option value='" . $td->getIdTipoDocente() . "'>" . $td->getDescripcion() . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td ><p>Grado Profesional del ingreso: </p></td>
                                <td>
                                    <select name="ddlGradoProfesional" id="ddlGradoProfesional">
                                        <?php
                                        $DAO_GradoProfesional = new DAO_GradoProfesional();
                                        $listaGP = $DAO_GradoProfesional->buscarGradoProfesional();
                                        foreach ($listaGP as $gp) {
                                            echo "<option value='" . $gp->getIdGradoProfesional() . "'>" . $gp->getDescripcion() . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="submit" name="btnAgregarDocente" ></td>
                            </tr>


                        </tbody>

                    </table>
                </form>
            </div>

        </body>
    </html>
    <?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>