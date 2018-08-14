<?php
@session_start();

//si la sessión que contiene el nombre de usuario existe y no está nula, entonces se presenta la gráfica
if (isset($_SESSION['nombre_usuario'])) {
    ?>
    <html>
        <head>
            <title>Vista_Administrador</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="../css/Estilos_Admin.css" rel="stylesheet" type="text/css">
            <!--  bajar versión local-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Detectar Movimiento (Para Matar la sesion por inactividad)-->
            <script>
                function(){
                var moviendo = false;
                        document.onmousemove = function(){
                        moviendo = true;
                        };
                        setInterval (function() {
                        if (!moviendo) {
                        // No ha habido movimiento desde hace un segundo, aquí tu codigo
                        } else {
                        moviendo = false;
                        }
                        }, 1000); // Cada segundo, pon el valor que quieras.
                        })()
            </script>

            <!--Cerrar Sesion si no se realiza nada(Aun no terminado xd)-->
            <script>
                        //Cerrar Sesion automáticamente si no se realiza nada en 10 minutos(Aun no terminado)
                        window.onload = function () {
                        MatarSesion();
                        }

                function MatarSesion() {

                setTimeout("window.open('../capaConexion/CL_Desconectar.php','_top');", 600000);
                }

            </script>
            <script>
                function buscarDocente() {
                rut = document.getElementById("txtRut").value;
                        $.ajax({
                        type: "POST",
                                url: '../capaLogicaNegocio/BO_Docentes.php',
                                data: {'txtRut': rut,
                                        btnVerDocente: 'btnVerDocente'
                                },
                                beforeSend: function () {
                                //$("#info-docente").html("gif animado");
                                //$("#info-docente").slideUp(300).delay(100).fadeIn(800); //retraso y animacion
                                $("#contenedor-info-docente").slideUp(300).delay(50).fadeIn(800); //retraso y animacion
                                },
                                success: function (response) {
                                //$('#info-docente').html(response); //se carga el contenido en el div
                                $('#contenedor-info-docente').html(response); //se carga el contenido en el div
                                }
                        });
                }
            </script>

            <script>
                function mostrar() {
                document.getElementById("sidebar").style.width = "78px";
                        document.getElementById("menu-lateral").style.marginLeft = "78px";
                        document.getElementById("contenedor").style.marginLeft = "90px";
                        document.getElementById("abrir").style.display = "none";
                        document.getElementById("cerrar").style.display = "inline";
                }

                function ocultar() {
                document.getElementById("sidebar").style.width = "0";
                        document.getElementById("menu-lateral").style.marginLeft = "0";
                        document.getElementById("contenedor").style.marginLeft = "40px";
                        document.getElementById("abrir").style.display = "inline";
                        document.getElementById("cerrar").style.display = "none";
                }
            </script>
        </head>
        <body>
            <!--menù lateral para acciones adicionales-->
            <div id="sidebar" class="sidebar">
                <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
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
                        <div>
                            <!--Mostrar quien es el usuario ingresado en el sistema-->
                            <p>Bienvenido/a a <strong>Duoc UC</strong>: <?php echo $_SESSION['nombre_usuario'] ?></p>
                        </div>
                        <div>
                            <!--boton que destruye sesion-->
                            <form method="POST" action="../capaLogicaNegocio/BO_Accesos.php">
                                <button class="boton_personalizado" name="btnCerrarSesion" value="Cerrar Sesion">
                                    <span class="glyphicon glyphicon-remove"></span> Cerrar Sesion
                                </button>
                            </form>

                        </div>
                    </div>
                    <!--BOTON PARA MENÙ LATERAL-->
                    <div id="menu-lateral">
                        <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"><span class="glyphicon glyphicon-transfer"></span></a>
                        <a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()"><span class="glyphicon glyphicon-transfer"></span></a>
                    </div>


                </header>
                <hr>


                <!--este div contiene el color del sistema-->
                <div class="contenedor" id="contenedor">    

                    <!--div que muestra "adminstrador del sistema"-->
                    <div class="articulo_1">
                        <h5><span class="glyphicon glyphicon-ok"></span> Administrador del sistema</h5>
                    </div>
                    <!--div que muestra las cajas de texto y los botones-->
                    <article class="articulo_2">
                        <section>

                            <label id="lblDocente" class="label label-default">Rut Docente</label>
                            <input type="text" placeholder="Ingrese Rut" name="txtRut" id="txtRut" required >
                            <button type="submit" class="btn"  id="btnVerDocente"  autocomplete="off" name="btnVerDocente" value="VerDocente" onclick="buscarDocente()">Ver Docente</button>

                        </section>

                        <section class="art2-sec-2">
                            <label id="lblEscuela" class="label label-default">Escuela</label>
                            <input type="text" placeholder="Ingrese Escuela" name="txtEscuela" id="txtEscuela" required> 
                            <button class="btn" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btnVerEscuela" name="btnVerEscuela" value="VerEscuela" >Ver Escuela</button>
                        </section>

                    </article>

                    <!--aqui se carga la información del docente-->
                    <div id="contenedor-info-docente">

                    </div>


                </div>
            </div>


        </body>
    </html>
    <?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>
