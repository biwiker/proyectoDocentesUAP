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
                        '+'<th>Rut</th> \n\
                        '+'<th>DV</th> \n\
                        '+'<th>ID Docente</th> \n\
                        '+'<th>Primer Nombre</th> \n\
                        '+'<th>Segundo Nombre</th> \n\
                        '+'<th>Apellido Paterno</th> \n\
                        '+'<th>Apellido Materno</th> \n\
                        '+'<th>ID CentroCosto</th> \n\
                        '+'<th>Correo Duoc</th> \n\
                        '+'<th>Correo Personal</th> \n\
                        '+'<th>Telefono Fijo</th> \n\
                        '+'<th>Telefono Movil</th> \n\
                        '+'</tr> \n\
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
        <div class="row">
            <div class="col-lg-4 col-md-5 col-xs-6">
                <img src="../Imagenes/fondo-transparente_3.png" title="Logo DuocUC" class="Logo img-responsive">
            </div>
            <div class="col-lg-8 col-xs-6">
                <p class="sesion">Bienvenido/a a <strong>Duoc UC</strong>:</p>
            </div>
        </div>
    <hr>
        <div class="col-lg-12 articulo_1">
            <ul>
                <li><a href="#">Docentes</a></li>
                <li><a href="#">Adminstrar</a></li>
            </ul>
        </div>
    <!--boton que tiene la funcion de agregar una nueva columna a la tabla-->
    <div class="btn btn-success" onclick="agregarFila()" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo Docente </div>
    <div class="form-group">
            <div class="row">
                <div class="col-lg-12">
                <table id="myTable">
                    
                </table>
               </div> 
            </div>
        </div>
         <!-- <div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div>
          <div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div>-->
</body>
</html>



