
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
        <label class="etiqueta1">Agregar Nuevo Docente</label>
        <button class="btn btn-success" id="btnNuevo">Nuevo</button>
               
                <table class="table table-hover table-bordered table-condensed table-responsive" id="tablaAlineamiento">
                    <tr>
                        <th>Rut</th>
                        <th>DV</th>
                        <th>ID Docente</th>
                    </tr>  
                    <tr>
                        <td><input type="text" class="form-control" /> </td>
                        <td><input type="text" class="form-control" /> </td>
                        <td class="text-center">
                            <div class="btn btn-primary">Guardar</div>
                            <div class="btn btn-danger">Eliminar</div>
                        </td>
                    </tr>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 <!-- <tr class="danger">
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
                        <th>ID_CentroCosto</th>
                        <th>Telefono Fijo</th>
                        <th>Telefono Movil</th>
                    </tr>
                     <tr>
                        <td>19.681.873</td>
                        <td>1</td>
                        <td>1</th>
                        <td>Ariel</td>
                        <td>Adolfo</td>
                        <td>Concha</td>
                        <td>Alegria</td>
                        <td>1</td>
                        <td>Ar.concha@profesor.duoc.cl</td>
                        <td>Ariel.Adolfo@gmail.com</td>
                        <td>5</td>
                        <td>298765678</td>
                        <td>964321933</td>
                    </tr> -->
                </table>
    </body>
</html>
