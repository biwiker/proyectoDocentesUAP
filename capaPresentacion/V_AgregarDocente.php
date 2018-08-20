<html>
    <head>
        <meta charset="UTF-8">
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/Estilos_AgregarDocente.css" rel="stylesheet" type="text/css">
        <!--  bajar versión local-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                            <title>Agregar Nuevo Docente</title>

            <script>
                <!--Metodo agregar fila-->
        function agregarFila() {
                var table = document.getElementById("myTable");
                var row = table.insertRow(0);
                var fila1 = row.insertCell(0);
                fila1.innerHTML = '<table class=" table-hover  table-condensed table-responsive" id="myTable"> \n\
                                ' + '<tr> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><input type="text" class="form-control"> </td> \n\
                                ' + '<td><div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div></td> \n\
                                ' + '<td><div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div></td> \n\
                                ' + '</tr> \n\
                                ' + '</table>';

     }
                                <!--Metodo eliminar fila-->
                                function eliminarfila()
                                {
                                    document.getElementById("
                                            myTable").deleteRow(0);
                    }
        </script>
    </head>
    <body>   
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
        <hr>
        <div class="articulo_1"> 
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <!--boton que tiene la funcion de agregar una nueva columna a la tabla-->
                    <div class="btn btn-success" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo Docente </div>
                    <!--etiqueta-->
                    <label class=" label label-default">Filtros De Busqueda</label>
                    <!--caja de texto para el rut-->
                    <input type="text" class="txtRut" placeholder="Ingrese Rut" >
                    <!--select que se debe relacionar con la base de datos para obtener las escuelas-->
                    <select class="escuela"> 
                        <option>PUENTE ALTO</option>
                    </select>
                    <!--tabla la cual contiene la informacion de la base de datos-->
                    <table class="table table-responsive table-bordered table-condensed">
                        <thead >
                        <th>Rut</th>
                        <th>DV</th>
                        <th>ID</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Tercer Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>ID Centro Coste</th>
                        <th>Correo Duoc</th>
                        <th>Correo Personal</th>
                        <th>Correo Personal Alternativo</th>
                        <th>Telefono Fijo</th>
                        <th>Telefono Movil</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
         <!-- <div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div>
          <div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div>-->
    </body>
</html>



