<!DOCTYPE html>
<html>
    <head>
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="../css/Estilos_AgregarDocente.css" rel="stylesheet" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../estilo.css">
        <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
        <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $("#add").click(function () {
                    // Obtenemos el numero de columnas (td) que tiene la primera fila
                    // (tr) del id "tabla"
                    var tds = $("#tabla tr:first td").length;
                    // Obtenemos el total de filas (tr) del id "tabla"
                    var trs = $("#tabla tr").length;
                    var nuevaFila = "<tr>";
                    cant = $('#contador-filas').val();
                    cant++;
                    $('#contador-filas').val(cant)
                    nuevaFila += "<td><input class='form-control' type='text' name='Rut[" + (cant) + "]' placeholder='Rut" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='Dv[" + (cant) + "]' placeholder='Digito Verificador" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='IdDuoc[" + (cant) + "]' placeholder='ID Duoc" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='PrimerNombre[" + (cant) + "]' placeholder='Primer Nombre" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='SegundoNombre[" + (cant) + "]' placeholder='Segundo Nombre" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='TercerNombre[" + (cant) + "]' placeholder='Tercer Nombre" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='ApellidoPaterno[" + (cant) + "]' placeholder='Apellido Paterno" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='ApellidoMaterno[" + (cant) + "]' placeholder='Apellido Materno" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='AnioIngreso[" + (cant) + "]' placeholder='Año de Ingreso" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='CorreoDuoc[" + (cant) + "]' placeholder='CorreoDuoc" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='CorreoPersonal[" + (cant) + "]' placeholder='CorreoPersonal" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='TelefonoFijo[" + (cant) + "]' placeholder='TelefonoFijo" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='TelefonoMovil[" + (cant) + "]' placeholder='TelefonoMovil" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='escuelaPrograma[" + (cant) + "]' placeholder='Escuela Programa" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='IdCentroCoste[" + (cant) + "]' placeholder='Id Centro Coste" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='TipoDocentes[" + (cant) + "]' placeholder='Tipos de Docentes" + (cant) + "' required /> </td>" +
                            "<td><input class='form-control' type='text' name='GradoProfesional[" + (cant) + "]' placeholder='Grado Profesional" + (cant) + "' required /> </td>" +
                            "<td><input type='submit' name='btnGuardar' value='Guardar' class='btn btn-sm btn-primary'/></td>" +
                            "<td><input type='reset' name='borrar' class='btn btn-sm btn-warning' /></td>";

// Añadimos una columna con el numero total de columnas.
                    // Añadimos uno al total, ya que cuando cargamos los valores para la
                    // columna, todavia no esta añadida
                    nuevaFila += "</tr>";
                    $("#tabla").append(nuevaFila);
                });
                /**
                 * Funcion para eliminar la ultima columna de la tabla.
                 * Si unicamente queda una columna, esta no sera eliminada
                 */
                $("#del").click(function () {
                    // Obtenemos el total de filas (tr) del id "tabla"
                    var trs = $("#tabla tr").length;
                    if (trs > 2)
                    {
                        // Eliminamos la ultima fila
                        cant--;
                        $('#contador-filas').val(cant)
                        $("#tabla tr:last").remove();

                    }
                });
            });
        </script>

        <style>
            #add, #del {text-decoration:none;color:#fff;}
        </style>
    </head>

    <body>
        <?php
        if (!isset($_POST['datos'])) {
            ?>

            <div id="sidebar" class="sidebar">
                <ul class="menu">
                    <li><a href="#"><span class="glyphicon glyphicon-th-large"></span><p>Administrar</p></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span><p>Estad&iacute;sticas</p></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><p>Usuarios</p></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span><p>Configuraci&oacute;n</p></a></li>
                </ul>
            </div>
            <div id="contenido-total">
                <header class="principal"> 
                    <!--imagen duoc uc-->
                    <div class="logo">
                        <img src="../Imagenes/fondo-transparente_4.png">
                    </div>

                    <div class="container-menu">
                        <div class="info-usuario">
                            <div>
                                <!--Mostrar quien es el usuario ingresado en el sistema-->
                                <p>Bienvenido/a a <strong>Duoc UC</strong>:</p>
                            </div>
                            <!--Menu de sesion-->
                            <div class="dropdown">
                                <!--Boton de menu-->
                                <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Perfil
                                    <span class="caret"></span></button>
                                <!--Opciones de menu--> 
                                <ul  class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Inicio</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Cambiar contraseña</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">Configuración</a>
                                    </li>
                                    <!--boton que destruye sesion-->
                                    <form action="../capaLogicaNegocio/BO_Accesos.php" method="POST">
                                        <li role="presentation">
                                            <div class="form-control">
                                                <button class="boton_personalizado" name="btnCerrarSesion" value="Cerrar Sesion">
                                                    <span class="glyphicon glyphicon-remove"></span>Cerrar sesion
                                                </button>
                                            </div> 
                                        </li> 
                                    </form>

                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="articulo_1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <center>
                            <label class=" label label-default">Filtros De Busqueda</label>
                            <!--caja de texto para el rut-->
                            <input type="text" name="txtRut" placeholder="Ingrese Rut" style="position: absolute;top:50px;left:170px; width:130px" >
                            <!--select que se debe relacionar con la base de datos para obtener las escuelas-->
                            <select class="escuela"> 
                                <option>PUENTE ALTO</option>
                            </select>

                            <br /><br />
                            <button id="add" class="nuevoDocente btn btn-success "><span class="glyphicon glyphicon-file"></span>Nuevo Docente</button>
                            <button id="del" class="eliminarDocente btn btn-danger "><span class="glyphicon glyphicon-remove"></span>Eliminar Docente</button>
                            <br /><br />

                            <form action="" method="POST">
                                <table class=" tabla table table-responsive table-bordered table-condensed"id="tabla">
                                    <thead>
                                        <tr class="info">
                                            <th>Rut</th>
                                            <th>DV</th>
                                            <th>ID DUOC</th>
                                            <th>Primer Nombre</th>
                                            <th>Segundo Nombre</th>
                                            <th>Tercer Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Año de Ingreso</th>
                                            <th>Correo Duoc</th>
                                            <th>Correo Personal</th>
                                            <th>Telefono Fijo</th>
                                            <th>Telefono Movil</th>
                                            <th>Escuela Programa</th>
                                            <th>Tipo de Docente</th>
                                            <th>Centro Coste</th>
                                            <th>Grado Profesional</th>
                                            <th>Herramientas</th>
                                            <th>Herramientas</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fila-0">
                                    <input type="hidden" id="contador-filas" value="0" />
                                    <td><input class="form-control" type="text" name="Rut[0]" placeholder="Rut" required /></td>
                                    <td><input class="form-control" type="text" name="Dv[0]" placeholder="DV" required /></td>
                                    <td><input class="form-control" type="text" name="IdDuoc[0]" placeholder="ID" required /></td>
                                    <td><input class="form-control" type="text" name="PrimerNombre[0]" placeholder="Primer Nombre" required /></td>
                                    <td><input class="form-control" type="text" name="SegundoNombre[0]" placeholder="Segundo Nombre" required /></td>
                                    <td><input class="form-control" type="text" name="TercerNombre[0]" placeholder="Tercer Nombre" required /></td>
                                    <td><input class="form-control" type="text" name="ApellidoPaterno[0]" placeholder="Apellido Paternoo" required /></td>
                                    <td><input class="form-control" type="text" name="ApellidoMaterno[0]" placeholder="Apellido Materno" required /></td>
                                    <td><input class="form-control" type="text" name="AnioIngreso[0]" placeholder="Año de Ingreso" required /></td>
                                    <td><input class="form-control" type="text" name="CorreoDuoc[0]" placeholder="Correo Duoc" required /></td>
                                    <td><input class="form-control" type="text" name="CorreoPersonal[0]" placeholder="Correo Personal" required /></td>
                                    <td><input class="form-control" type="text" name="TelefonoFijo[0]" placeholder="Telefono Fijo" required /></td>
                                    <td><input class="form-control" type="text" name="TelefonoMovil[0]" placeholder="Telefono Movil" required /></td>
                                    <td><input class="form-control" type="text" name="escuelaPrograma[0]" placeholder="Escuela Programa" required /></td>     
                                    <td><input class="form-control" type="text" name="tipoDocente[0]" placeholder="Tipo de Docente" required /></td>
                                    <td><input class="form-control" type="text" name="centroCoste[0]" placeholder="Centro de Coste" required /></td>
                                    <td><input class="form-control" type="text" name="gradoProfesional[0]" placeholder="Grado Profesional" required /></td>
                                    <td><input type="submit" name="btnGuardar" value="Guardar" class="btn btn-sm btn-primary" ></input></td>
                                    <td><input type="reset" name="borrar" value="Restablecer" class="btn btn-sm btn-warning" ></input></td>

                                    </tr>
                                    </tbody>
                                </table>

                            </form>
                        </center>
                        <?php
                    } else {
                        $Rut[] = $_POST['Rut'];
                        $Dv[] = $_POST['Dv'];
                        $Id[] = $_POST['IdDuoc'];
                        $PrimerNombre[] = $_POST['PrimerNombre'];
                        $SegundoNombre[] = $_POST['SegundoNombre'];
                        $TercerNombre[] = $_POST['TercerNombre'];
                        $ApellidoPaterno[] = $_POST['ApellidoPaterno'];
                        $ApellidoMaterno[] = $_POST['ApellidoMaterno'];
                        $AnioIngreso[] = $_POST['AnioIngreso'];
                        $CorreoDuoc[] = $_POST['CorreoDuoc'];
                        $CorreoPersonal[] = $_POST['CorreoPersonal'];
                        $TelefonoFijo[] = $_POST['TelefonoFijo'];
                        $TelefonoMovil[] = $_POST['TelefonoMovil'];
                        $EscuelaPrograma[] = $_POST['EscuelaPrograma'];
                        $TipoDocente[] = $_POST['TipoDocente'];
                        $CentroCoste[] = $_POST['CentroCoste'];
                        $GradoProfesional[] = $_POST['GradoProfesional'];
                        $btnGuardar[] = $_POST['btnGuardar'];
                        $borrar[] = $_POST['borrar'];
                    }
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>