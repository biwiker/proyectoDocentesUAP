<html>
    <head>
        <title>Error Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/Estilos.css" rel="stylesheet" type="text/css">
        <script src="bootstrap 3/js/bootstrap.js"></script>
        <script src="bootstrap 3/jquery-3.3.1.js"></script>
    </head>


    <body>
        <!--cabecera con imagen de DUOC-->
        <header class="imagenDuocSuperior">
            <img src="Imagenes/fondo-transparente_4.png"> 
        </header>
        
        <hr style=" height: 7px; background-color:#FACC2E; margin-top: 1px; margin-bottom: 70px;"/>
        
        <!-- Titulo y subtitulo -->
        <div class="container-image,col-lg-6,col-md-6">
            <h1 class="titulo" style="margin-left: 20px"><strong>Oops!! Lo sentimos</strong></h1>
            <h1 class="subtitulo" style="margin-left: 20px"><strong>404 - La pagina no fue encontrada</strong></h1>
             <br/>
            <!--texto descripcion-->
            <ul style="font-weight: bold">
                <li type="disc"><p>No podemos encontrar la página que está buscando.</p></li>
                <li type="disc"><p>Es posible que se haya eliminado, que se haya cambiado su nombre o que no esté disponible temporalmente. </p></li>
                <li type="disc"><p>Verifique que la dirección del sitio web esté escrita correctamente.</p></li>
                <li type="disc"><p> puede ir a nuestra <a href="capaPresentacion/V_login.php">Página de inicio</a>
                        , y intente ingresar nuevamente.</p></li>   
            </ul>

            <!-- imagen error -->
            <div class="col-lg-6,col-md-6" style="position:absolute; top:80px;left:800px">
                <marquee scrollamount=”6″ loop=”0″ direction="right"><img src="Imagenes/error1.png" title="error 404" style="width: 400px;height: 400px;"></marquee> 

            </div>

            <!--boton volver-->
            <form action="capaPresentacion/V_Login.php">
                <button type="submit" name="btnVolver" class="btn" id="botonVolver">Volver</button>
            </form>
            <br/>



        </div>
    </body>

</div>


</body>
</html>


