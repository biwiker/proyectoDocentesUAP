<html>
    <head>
        <title>Vista_Administrador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/Estilos_Admin.css" rel="stylesheet" type="text/css">
        <script src="../bootstrap 3/js/bootstrap.js"></script>
        <script src="../bootstrap 3/jquery-3.3.1.js"></script>
    </head>
    <body>
        <!--este div contiene el color del sistema-->
        <div class="contenedor"> 
            <!-- div de la barra superior -->
        <header class="cabezera"> 
            <!--imagen duoc uc-->
            <img src="../Imagenes/fondo-transparente_1.png" height="50px" width="200px">
            <!--texto donde deberia aparecer el usuario que inició sesion-->
            <p>Bienvenido/a </p>
            <!--boton que destruye sesion-->
            <button class="boton_personalizado" name="btnCerrarSesion" value="Cerrar Sesion"><span class="glyphicon glyphicon-remove"></span> Cerrar Sesion</button>
        </header>
            <!--div que muestra "adminstrador del sistema"-->
            <div class="articulo_1">
                <h1><span class="glyphicon glyphicon-ok"></span> Administrador Del Sistema</h1>
            </div>
            <!--div que muestra las cajas de texto y el boton-->
            <div class="articulo_2">
                <label id="Docente">Rut Docente</label>
                <input type="text" placeholder="Ingrese Rut" name="txtRut" id="Rut" required >
                <label id="Escuela">Escuela</label>
                <input type="text" placeholder="Ingrese Escuela" name="txtEscuela" id="txtEscuela" required> 
                <button class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnVerDocente" value="Ver Docente" >Ver
                </button>
            </div>
            <!--div que muestra la otra funcion que tiene el administrador-->
            <div class="articulo_3">
                <h4>Inclusion</h4>
                <button class="btn btn-success" id="btnEditarInclusion" name="btnEditarInclusion" value="Ver Inclusion">Ver</button>      
            </div>
            <div class="articulo_4">
                <h4>Uap</h4>
                <button class="btn btn-success" id="btnEditarUap" name="btnEditarUap" value="Ver Uap">Ver</button>
            </div>
       </div>
    </body>
</html>
