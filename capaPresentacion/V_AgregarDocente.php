<?php
@session_start();

//si la sessión que contiene el nombre de usuario existe y no está nula, entonces se presenta la gráfica
if (isset($_SESSION['nombre_usuario'])) {
    include_once '../capaAccesoDatos/DAO_Escuela.php';
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/Estilos_AgregarDocente.css" rel="stylesheet" type="text/css">
        <!--  bajar versión local-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script>
           $(buscar_datos());  
                function buscar_datos(consulta){
                $.ajax({
                   url:'../capaLogicaNegocio/Buscar.php';
                   type:'POST';
                   dataType:'html';
                   data:{consulta:consulta};
                })
}         .done(function(respuesta){
            $("#datos").html(respuesta);
          })
           .fail(function(){
            console.log("error");     
          })  
         </script>
         <title>Agregar Nuevo Docente</title>
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
        <!--menù lateral para acciones adicionales-->
        <div id="sidebar" class="sidebar">
            <ul class="menu">
                <li><a href="#"><span class="glyphicon glyphicon-th-large"></span><p>Administrar</p></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-signal"></span><p>Estad&iacute;sticas</p></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><p>Usuarios</p></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span><p>Configuraci&oacute;n</p></a></li>
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
                        <div class="">
                            
                            
                            <button type="button" data-toggle="dropdown" id="btnDesplegable">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            
                            
                            <!--Opciones de menu--> 
                            <ul  class="dropdown-menu">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">Configuración</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">Cambiar contraseña</a>
                                </li>
                                <li role="presentation">
                                    <!--boton que destruye sesion-->
                                    <form method="POST" action="../capaLogicaNegocio/BO_Accesos.php">
                                        <button name="btnCerrarSesion" value="Cerrar Sesion">
                                            <span >cerrar sesion</span>
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </div>
                        <div >
                            <!--Boton de menu-->
                            
                            
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
        <hr>
        <div class="articulo_1"> 
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                     <!--boton que tiene la funcion de agregar una nueva columna a la tabla-->
                     <div class="btn btn-success" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo Docente </div>
                     <!--etiqueta-->
                     <label class=" label label-default">Filtros De Busqueda</label>
                     <!--caja de texto para el rut-->
                     <input type="text" name="txtRut" id="txtRut" placeholder="Ingrese Rut" >
                     <!--select que se debe relacionar con la base de datos para obtener las escuelas-->
                         <select class="escuela"> 
                           <option>PUENTE ALTO</option>
                         </select>
                     <div id="datos">
                         
                     </div>
                <hr>
                
<!--            <div class="articulo_1"> 
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        boton que tiene la funcion de agregar una nueva columna a la tabla
                        <div class="btn btn-success" id="btnNuevo"><span class="glyphicon glyphicon-file"></span> Nuevo Docente </div>
                        etiqueta
                        <label class=" label label-default">Filtros De Busqueda</label>
                        caja de texto para el rut
                        <input type="text" class="txtRut" placeholder="Ingrese Rut" >
                        select que se debe relacionar con la base de datos para obtener las escuelas
                        <select class="escuela"> 
                            <option>PUENTE ALTO</option>
                        </select>
                        tabla la cual contiene la informacion de la base de datos
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
        </div>  
         <!-- <div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div>
          <div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

            </div>  -->
             <!-- <div class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-edit"></span> Guardar</div>
              <div class="btn btn-danger" id="btnEliminar"><span class="glyphicon glyphicon-remove"></span> Eliminar</div>-->


        </div>

    </body>
</html>
<?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>


