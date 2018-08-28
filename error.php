<html>
    <head>
        <title>Error Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/Estilos_Error.css" rel="stylesheet" type="text/css">
        <script src="bootstrap 3/js/bootstrap.js"></script>
        <script src="bootstrap 3/jquery-3.3.1.js"></script> 
    </head>


    <body>
        <!--cabecera-->
        <header class="principal">
            <img src="Imagenes/fondo-transparente_4.png"> 
        </header>

        <!--linea de división del header amarilla-->
        <hr>

        <!-- Titulo y subtitulo -->
        <div class="contenido">
            <div id="mensaje">
                <h1><strong>Oops!! Lo sentimos</strong></h1>
                <h1><strong>404 - La p&aacute;gina no fue encontrada</strong></h1>

                <!--texto descripcion-->
                <ul>
                    <li type="disc"><p>No podemos encontrar la p&aacute;gina que está buscando.
                            Es posible que se haya eliminado, que se haya cambiado su nombre o que no est&eacute; disponible temporalmente.
                            Verifique que la direcci&oacute;n del sitio web est&eacute; escrita correctamente
                            o puede ir a nuestra <a href="capaPresentacion/V_login.php">P&aacute;gina de inicio</a>, e intentar ingresar nuevamente.</p></li>   
                </ul>
                <!--boton volver-->
                <div id="boton">
                    <form action="capaPresentacion/V_Login.php">
                        <button type="submit" name="btnVolver" class="btn botonVolver">Volver</button>
                    </form>
                </div>
            </div>

            <!-- imagen error -->
            <div id="imagen">
                <img src="Imagenes/error1.png" title="error 404" >
            </div>

        </div>
    </body>
</body>
</html>


