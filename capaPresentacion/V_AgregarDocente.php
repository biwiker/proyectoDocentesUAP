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
                        '+'<tr> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><input type="text" class="form-control"> </td> \n\
                        '+'<td><div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div></td> \n\
                        '+'<td><div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div></td> \n\
                        '+'</tr> \n\
                        '+'</table>';
                
            }
<!--Metodo eliminar fila-->
            function eliminarfila() {
                document.getElementById("myTable").deleteRow(0);
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
                    <div class="info-usuario">
                        <div>
                            <!--Mostrar quien es el usuario ingresado en el sistema-->
                            <p>Bienvenido/a a <strong>Duoc UC</strong>:</p>
                        </div>
                        <div>
                            <!--boton que destruye sesion-->
                            <form method="POST" action="../capaLogicaNegocio/BO_Accesos.php">
                                <button class="boton_personalizado" name="btnCerrarSesion" value="Cerrar Sesion">
                                    <span class="glyphicon glyphicon-remove"></span> Cerrar Sesion
                                </button>
                            </form>
                        </div>
                    </div>
                </header>
            </div>
        <hr>
        <div class="articulo_1"> 
            <div class="row">
                <div class="col-lg-12">
                     <!--boton que tiene la funcion de agregar una nueva columna a la tabla-->
                     <div class="btn btn-success" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo Docente </div>
                     <!--etiqueta-->
                     <label class=" label label-default">Filtros De Busqueda</label>
                     <!--caja de texto para el rut-->
                     <input type="text" class="txtRut" placeholder="Ingrese Rut" >
                     <!--select que se debe relacionar con la base de datos para obtener las escuelas-->
                         <select class="selectpicker" data-style="btn-warning"> 
                           <option>PUENTE ALTO</option>
                         </select>
                </div>
            </div>
        </div>  
         <!-- <div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div>
          <div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div>-->
</body>
</html>



