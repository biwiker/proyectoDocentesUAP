<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../Css/Estilos_Login.css" rel="stylesheet" type="text/css">
        <script src="../bootstrap 3/js/bootstrap.js"></script>
        <script src="../bootstrap 3/jquery-3.3.1.js"></script>
    </head>
    <body>
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
            
            <form id="formulario" class="form-group" method="post" action="">
                
                <div class="form-group">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="">
                </div>
                
                <div class="form-group">
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" required="">
                </div>
                
                <button type="button" name="btnIngreso" class="btn"  id="boton-login">Ingresar</button>            

            </form>
        </div>
        
        
        
    </body>
</html>
