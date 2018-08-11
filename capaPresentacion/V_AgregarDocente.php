
<html>
    <head>
        <meta charset="UTF-8">
         <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
         <link href="../css/Estilos_AgregarDocente.css" rel="stylesheet" type="text/css">
         <!--  bajar versión local-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="../Js/AgregarFilasTabla.js"></script>
        <title>Agregar Docente</title>
    </head>
    <body>
        <!--Div que contiene clases responsivas y contiene lo de la cabezera-->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <img src="../Imagenes/fondo-transparente_3.png" title="Logo DuocUC" class="Logo img-responsive">
            </div>
            <div class="col-lg-8 col-xs-6">
                <p class="sesion">Bienvenido/a a <strong>Duoc UC</strong>:</p>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 articulo_1">
            <ul>
                <li><a href="*">Docentes</a></li>
                <li><a href="*">Adminstrar</a></li>
            </ul>
        </div>
    
        <div class="btn btn-success" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo </div>
     
                <table class=" table-hover  table-condensed table-responsive" id="tablaAlineamiento">
                    <tr>
                        <th>Rut</th>
                        <th>DV</th>
                        <th>ID Docente</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>ID CentroCosto</th>
                        <th>Correo Duoc</th>
                        <th>Correo Personal</th>
                        <th>Telefono Fijo</th>
                        <th>Telefono Movil</th>
                    </tr>  
                    <tr>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><input type="text" class="form-control"> </td>
                        <td><div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div></td>
                        <td><div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div></td>
                    </tr>
                </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
      
    </body>
       
</html>
