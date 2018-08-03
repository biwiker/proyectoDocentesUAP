<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <title>Error 404</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/Estilos.css" rel="stylesheet" type="text/css">
        <link href="bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
            <script src="bootstrap 3/js/bootstrap.js"></script>
            <script src="bootstrap 3/jquery-3.3.1.js"></script>
            
            <body class="cuerpoError">
                <!--cabecera con imagen de DUOC-->
                <header class="imagenDuocSuperior">
                    <img src="Imagenes/fondo-transparente_4.png"> 
                </header>
                <!--linea de división del header amarilla-->
                <hr class="hr">

                <!--imagen de error en el lado izquierdo-->
                    <div>
                        <div> 
                            <img class="imagenError" src="Imagenes/error.png">
                        </div>
                <!--mensaje de error al pie de pagina lado derecho-->        
                        <div class="mensajeError404">
                            <h1><strong>PAGE NOT FOUND</strong></h1>
                        </div>
                    </div>

                    <!--
                    <div>
                        <h1 class="alert-danger"><strong>ERROR 404 NO FOUND</strong></h1>
                    </div>

                     <div class="alert alert-warning">
                        <strong>ERROR 404 NO FOUND</strong> Lo sentimos no encontramos la pagina.
                    </div>-->
            </body>
            <footer>
                <!--mensaje en el inferior derecha -->
                <div class="mensajeError">
                    <a href="capaPresentacion/V_Login.php" class="close" data-dismiss="alert" >&times;</a>
                    <strong>Lo sentimos no encontramos la pagina</strong>.
                </div>
                <!--boton para volver-->
                <div>
                    <button type="button" name="btnVolver" class="btn" href="capaPresentacion/V_Login.php"  id="botonVolver">Volver</button>
                </div>
            </footer>
            </html>
