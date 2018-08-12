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

              //Cerrar Sesion si no se realiza nada(Aun no terminado)
            <script>

                window.onload = function () {
                    MatarSesion();
                }

                function MatarSesion() {

                    setTimeout("window.open('../capaConexion/CL_Desconectar.php','_top');", 100000);

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
                                                    $("#info-docente").slideUp(300).delay(100).fadeIn(800); //retraso y animacion
                        },
                        success: function (response) {
                            $('#info-docente').html(response); //se carga el contenido en el div
                        }
                    });

                }



            </script>

        </head>
        <body>

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



            </header>
            <hr>
            <!--este div contiene el color del sistema-->
            <div class="contenedor">    

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

                <!-- articulo 3-->
                <article class="articulo_3">
                    <!-- articulo 3-->
                    <article>
                        <section>

                            <h4>Informacion Docente</h4>
                            <span data-toggle="collapse"  aria-expanded="false" href="#art3-cargaDatos">

                                <button class="btn" id="btnInfoDocente" name="btnInfoDocente" value="btnInfoDocente"><span></span></button>
                            </span>
                            <!--boton-->

                            <!--linea de division-->
                            <div id="linea-section"></div>
                        </section>
                        <!--esta sección contiene la información-->
                        <section id="art3-cargaDatos" class="collapse">
                            <div id="info-docente">

                            </div>
                        </section>
                    </article>

                </article>


            </div>
        </body>
    </html>
    <?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>
