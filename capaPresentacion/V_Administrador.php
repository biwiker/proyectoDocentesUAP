<html>
    <head>
        <title>Vista_Administrador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../bootstrap 3/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/Estilos_Admin.css" rel="stylesheet" type="text/css">
        <!--  bajar versión local-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
                    <p>Bienvenido/a a <strong>Duoc UC</strong>: Carolina de la Cerda <?php echo @$_SESSION['nombre']; ?> <?php echo @$_SESSION['apellido']; ?></p>
                </div>
                <div>
                    <!--boton que destruye sesion-->
                    <button class="boton_personalizado" name="btnCerrarSesion" value="Cerrar Sesion"><span class="glyphicon glyphicon-remove"></span> Cerrar Sesion</button>
                </div>
            </div>



        </header>
        <hr>
        <!--este div contiene el color del sistema-->
        <div class="contenedor">    

            <!--div que muestra "adminstrador del sistema"-->
            <div class="articulo_1">
                <h5><span class="glyphicon glyphicon-ok"></span> Administrador Del Sistema</h5>
            </div>
            <!--div que muestra las cajas de texto y los botones-->
            <article class="articulo_2">
                <section>
                    <label id="lblDocente" class="label label-default">Rut Docente</label>
                    <input type="text" placeholder="Ingrese Rut" name="txtRut" id="txtRut" required >
                    <button class="btn" data-toggle="button" aria-pressed="false" id="btnVerDocente"  autocomplete="off" name="btnVerDocente" value="VerDocente" >Ver Docente</button>
                </section>

                <section class="art2-sec-2">
                    <label id="lblEscuela" class="label label-default">Escuela</label>
                    <input type="text" placeholder="Ingrese Escuela" name="txtEscuela" id="txtEscuela" required> 
                    <button class="btn" data-toggle="button" aria-pressed="false" autocomplete="off"  id="btnVerEscuela" name="btnVerEscuela" value="VerEscuela" >Ver Escuela</button>
                </section>

            </article>
            <!-- articulo 3-->
            <article class="articulo_3">
                
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
                        <div class="panel-body">
                            contenido desde ajax
                        </div>
                    </section>
                </article>
            </article>
            <!-- articulo 4-->
            <article class="articulo_3">
                
                <article>
                    <section>
                        
                            <h4>Informacion Docente</h4>
                            <span data-toggle="collapse"  aria-expanded="false" href="#art4-cargaDatos">
                                
                                <button class="btn" id="btnInfoDocente" name="btnInfoDocente" value="btnInfoDocente"><span></span></button>
                            </span>
                            <!--boton-->
                            
                            <!--linea de division-->
                            <div id="linea-section"></div>
                    </section>
                    <!--esta sección contiene la información-->
                    <section id="art4-cargaDatos" class="collapse">
                        <div class="panel-body">
                            contenido desde ajax
                        </div>
                    </section>
                </article>
            </article>
            <!-- articulo 5-->
            <article class="articulo_3">
                
                <article>
                    <section>
                        
                            <h4>Informacion Docente</h4>
                            <span data-toggle="collapse"  aria-expanded="false" href="#art5-cargaDatos">
                                
                                <button class="btn" id="btnInfoDocente" name="btnInfoDocente" value="btnInfoDocente"><span></span></button>
                            </span>
                            <!--boton-->
                            
                            <!--linea de division-->
                            <div id="linea-section"></div>
                    </section>
                    <!--esta sección contiene la información-->
                    <section id="art5-cargaDatos" class="collapse">
                        <div class="panel-body">
                            contenido desde ajax
                        </div>
                    </section>
                </article>
            </article>
            
        </div>
    </body>
</html>
