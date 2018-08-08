<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/Estilos_Login.css" rel="stylesheet" type="text/css">
        <script src="../bootstrap 3/js/bootstrap.js"></script>
        <script src="../bootstrap 3/jquery-3.3.1.js"></script>
    </head>
    <!-- oncopy y onpaste es para no poder pegar ni copiar dentro de las cajas de texto-->
    <body oncopy="return false" onpaste="return false">
        <!--cabecera-->
        <header class="principal">
            <img src="../Imagenes/fondo-transparente_4.png"> 
        </header>
        
        <!--linea de división del header amarilla-->
        <hr>
        
        <!--imágen central-->
        <div class="main">
            <img src="../Imagenes/fondo-transparente_1.png">
        </div>
        
        <!--boton de login-->
        
        <div class="contenedor-login">
             <!--la action que tiene el formulario para su completo funcionamiento(En prueba)-->
            <form id="formulario" class="form-group" method="post" action="../capaLogicaNegocio/BO_Accesos.php">
                
                <h6><strong>Sistema de Administraci&oacute;n UAP</strong></h6>
                
                <div class="form-group">
                    <input type="text" id="usuario" name="txtUsuario" class="form-control" placeholder="Usuario" required="">
                </div>
                
                <div class="form-group">
                    <input type="password" id="clave" name="txtClave" class="form-control" placeholder="Clave" required="">
                </div>
                
                <button type="submit" name="btnIngreso" class="btn"  id="boton-login">Ingresar</button>            

            </form>
        </div>
        
        
        
    </body>
</html>
