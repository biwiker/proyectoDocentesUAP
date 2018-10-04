<?php
include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';




//------------------------------------------------------------------------------------------------------
//Acción a realizar cuando se busca por rut de docente
//------------------------------------------------------------------------------------------------------
if (isset($_POST['btnVerDocente'])) {

    $_rut = $_POST['txtRut'];

    $DAO_Docente = new DAO_Docente();

    //buscar información del docente y PAD
    $Docente = $DAO_Docente->buscarDocentePorRut($_rut);
    $DetallePAD = $DAO_Docente->buscarIndicadorPAD($_rut);

    if (!is_null($Docente)) {
        ?>
        <!-- se cargarán los artículos según la información que se encuentre del docente -->
        <!-- articulo 3 | información personal -->
        <article class="articulo_3">
            <!-- articulo 3 | información personal -->
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
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Nombre del docente:</b></td>
                                    <td><?php echo $Docente->get_pNombre(); ?> <?php echo $Docente->get_apPaterno() ?> <?php echo $Docente->get_apMaterno() ?></td>
                                    <td style="background-color: #F4F6F7"><b>RUN:</b></td>
                                    <td><?php echo $Docente->get_rut(); ?>-<?php echo $Docente->get_dv(); ?> </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Escuela o Programa:</b></td>
                                    <td><?php echo $Docente->get_idEscuelaPrograma(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Sede:</td>
                                    <td><?php echo $Docente->get_idCentroCosto(); ?></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Correo Institucional:</b></td>
                                    <td><?php echo $Docente->get_correo1(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Correo Personal:</b></td>
                                    <td><?php echo $Docente->get_correo2(); ?></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Tel&eacute;fono M&oacute;vil:</b></td>
                                    <td><?php echo $Docente->get_telefonoMovil(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>A&ntilde;o de Ingreso:</b></td>
                                    <td><?php echo $Docente->get_anioIngreso(); ?></td>
                                    <!--<td style="background-color: #F4F6F7"><b>Tel&eacute;fono Fijo:</b></td>
                                    <td>echo $Docente->getFonoFijo();</td>-->
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Tipo Docente:</b></td>
                                    <td><?php echo $Docente->get_idTipoDocente(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Grado Acad&eacute;mico:</b></td>
                                    <td><?php echo $Docente->get_idGradoProfesional(); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </article>
        </article>

        <!-- articulo 4 | información del PAD -->
        <?php
        if (!is_null($DetallePAD)) {
            ?>
            <article class="articulo_4">
                <!-- articulo 4-->
                <article>
                    <section>

                        <h4>Acompa&ntilde;amiento PAD</h4>
                        <span data-toggle="collapse"  aria-expanded="false" href="#art4-cargaDatos">
                            <button class="btn" id="btnInfoDocente" name="btnInfoDocente" value="btnInfoDocente"><span></span></button>
                        </span>
                        <!--boton-->

                        <!--linea de division-->
                        <div id="linea-section"></div>
                    </section>
                    <!--esta sección contiene la información-->
                    <section id="art4-cargaDatos" class="collapse">
                        <div id="info-docente">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="background-color: #F4F6F7"><b>A&ntilde;o</b></td>
                                        <td><?php echo $DetallePAD->get_anio(); ?></td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #F4F6F7"><b>Semestre:</b></td>
                                        <td><?php echo $DetallePAD->get_semestre(); ?></td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #F4F6F7"><b>Porcentaje:</b></td>
                                        <td><?php echo $DetallePAD->get_porcentaje(); ?>%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>
            </article>

            <?php
        }
        ?>

        <?php
    } else {
        ?>
        <article class="articulo_3">
            <section>

                <h4>Informacion Docente</h4>
                <!--linea de division-->
                <div id="linea-section"></div>
            </section>
            <section id="art3-cargaDatos" class="">
                <div id="info-docente">
                    <table class="">
                        <tbody>
                            <tr>
                                <td>No hay datos asociados</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
        <?php
    }
}

//------------------------------------------------------------------------------------------------------
//Acción a realizar cuando se busca por escuela
//------------------------------------------------------------------------------------------------------
if (isset($_POST['btnVerEscuela'])) {

    $Docente = new CL_Docente();

    $id_escuela = $_POST['ddlEscuela'];
    $nombre_escuela = $_POST['nombreEscuela'];

    $DAO_Docente = new DAO_Docente();
    //buscar información del docente por escuela
    $stmt = $DAO_Docente->buscarDocentePorEscuela($id_escuela);
    if (!is_null($stmt)) {
        include_once '../capaAccesoDatos/DAO_Docente.php';
        ?>
        <!-- articulo 3-->
        <article class="articulo_3">
            <!-- articulo 3-->
            <article>
                <section>

                    <h4>Docentes asociados a <?php echo $nombre_escuela ?>  </h4>
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
                        <?php
                        $contador = 1;
                        $stmt->bind_result($d_rut, $d_dv, $d_nombre, $d_apaterno, $d_amaterno, $d_correo1, $d_telefonoMovil);
                        while ($stmt->fetch()) {
                            echo "<table class='table table-bordered'>";
                            echo "  <tbody>";
                            echo "            <tr>";
                            echo "                <td style='background-color: #F4F6F7'>" . $contador . "</td>";
                            echo "                <td style='background-color: #F4F6F7'><b>Nombre del docente:</b></td>";
                            echo "                <td>" . $d_nombre . " " . $d_apaterno . " " . $d_amaterno . "</td>";
                            echo "                <td style='background-color: #F4F6F7'><b>RUN:</b></td>";
                            echo "                <td>" . $d_rut . "" . $d_dv . "</td>";
                            echo "                <td><button type='submit' class='btn'  id='btnVerDocente'  autocomplete='off' name='btnVerDocente' value='VerDocente' onclick='buscarDocente2(\"$d_rut$d_dv\")'>Ver Docente</button></td>";
                            echo "            </tr>";
                            echo "  </tbody>";
                            echo "</table>";
                            $contador ++;
                        }
                        $stmt->close();
                        ?>                           
                    </div>
                </section>
            </article>
        </article>
        <?php
    } else {
        ?>
        <article class="articulo_3">
            <section>

                <h4>Informacion Docente</h4>
                <!--linea de division-->
                <div id="linea-section"></div>
            </section>
            <section id="art3-cargaDatos" class="">
                <div id="info-docente">
                    <table class="">
                        <tbody>
                            <tr>
                                <td>No hay datos asociados</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
        <?php
    }
}

//------------------------------------------------------------------------------------------------------
//Acción a realizar cuando se escribe en la caja de texto por filtro
//------------------------------------------------------------------------------------------------------
if (isset($_POST['consulta'])) {

    $id_escuela = $_POST['ddlEscuela'];
    $filtro = $_POST['consulta'];

    $DAO_Docente = new DAO_Docente();

    $stmt = $DAO_Docente->filtrarDocentePorEscuela($id_escuela, $filtro);

    if (!is_null($stmt)) {
        include_once '../capaAccesoDatos/DAO_Docente.php';
        ?>
        <!-- articulo 3-->
        <article class="articulo_3">
            <!-- articulo 3-->
            <article>
                <section>

                    <h4>Docentes asociados a  </h4>
                    <span data-toggle="collapse"  aria-expanded="false" href="#art3-cargaDatos">
                        <button class="btn" id="btnInfoDocente" name="btnInfoDocente" value="btnInfoDocente"><span></span></button>
                    </span>
                    <!--boton-->

                    <!--linea de division-->
                    <div id="linea-section"></div>
                </section>
                <!--esta sección contiene la información-->
                <section id="art3-cargaDatos" class="collapse in">
                    <div id="info-docente">
                        <?php
                        $contador = 1;
                        $stmt->bind_result($d_rut, $d_dv, $d_nombre, $d_apaterno, $d_amaterno, $d_correo1, $d_telefonoMovil);
                        while ($stmt->fetch()) {
                            echo "<table class='table table-bordered'>";
                            echo "  <tbody>";
                            echo "            <tr>";
                            echo "                <td style='background-color: #F4F6F7'>" . $contador . "</td>";
                            echo "                <td style='background-color: #F4F6F7'><b>Nombre del docente:</b></td>";
                            echo "                <td>" . $d_nombre . " " . $d_apaterno . " " . $d_amaterno . "</td>";
                            echo "                <td style='background-color: #F4F6F7'><b>RUN:</b></td>";
                            echo "                <td>" . $d_rut . "" . $d_dv . "</td>";
                            echo "                <td><button type='submit' class='btn'  id='btnVerDocente'  autocomplete='off' name='btnVerDocente' value='VerDocente' onclick='buscarDocente2(\"$d_rut$d_dv\")'>Ver Docente</button></td>";
                            echo "            </tr>";
                            echo "  </tbody>";
                            echo "</table>";
                            $contador ++;
                        }
                        $stmt->close();
                        ?>                           
                    </div>
                </section>
            </article>
        </article>
        <?php
    } else {
        ?>
        <article class="articulo_3">
            <section>

                <h4>Informacion Docente</h4>
                <!--linea de division-->
                <div id="linea-section"></div>
            </section>
            <section id="art3-cargaDatos" class="">
                <div id="info-docente">
                    <table class="">
                        <tbody>
                            <tr>
                                <td>No hay datos asociados</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
        <?php
    }
}


//------------------------------------------------------------------------------------------------------
//Acción a realizar se carga la página de administrar docentes
//vamos a cargar la lista completa de docentes al momento de cargar la página para administrar docentes
//------------------------------------------------------------------------------------------------------
if (isset($_POST['administrarDocentes'])) {

    $DAO_Docente = new DAO_Docente();

    //obtenemos la lista de todos los docentes que viene desde la base de datos
    $listaDocentes = $DAO_Docente->listarDocentes();


    if (!is_null($listaDocentes)) {
        ?>
        <article class="articulo_1"> 
            <input type="button" name="btnAgregarDocente" value="Agregar nuevo docente" onclick=" location.href='V_AgregarDocente.php' ">
            <input type="text" value="">
            <input type="button" value="Buscar">
            <input type="button" value="Eliminar Seleccionados">
        </article>
        <!-- articulo 3-->
        <article class="articulo_3">

            <!--esta sección contiene la información-->
            <section>
                <div class="fl-listado-docentes">
                    <?php
                    foreach ($listaDocentes as $docente) {
                        echo "<table class='table table-bordered'>";
                        echo "  <input type='checkbox'/>";
                        echo "  <tbody>";
                        echo "            <tr>";
                        echo "                <td style='background-color: #F4F6F7'><b>Nombre del docente:</b></td>";
                        echo "                <td>" . $docente->get_pNombre(). " " . $docente->get_apPaterno(). " " . $docente->get_apMaterno(). "</td>";
                        echo "                <td style='background-color: #F4F6F7'><b>RUN:</b></td>";
                        echo "                <td>" . $docente->get_rut() . "" . $docente->get_dv() . "</td>";
                        echo "            </tr>";
                        echo "            <tr>";
                        echo "                <td style='background-color: #F4F6F7'><b>Correo:</b></td>";
                        echo "                <td>" . $docente->get_correo1() . "</td>";
                        echo "                <td style='background-color: #F4F6F7'><b>Telefono:</b></td>";
                        echo "                <td>" . $docente->get_telefonoMovil() . "</td>";
                        echo "                <td><input type='button' value='Modificar'></td>";
                        echo "            </tr>";
                        echo "  </tbody>";
                        echo "</table>";
                    }
                    $stmt->close();
                    ?>                           
                </div>
            </section>

        </article>
        <?php
    } else {
        ?>

        <article class="articulo_3">
            <section>

                <h4>Informacion Docente</h4>
                <!--linea de division-->
                <div id="linea-section"></div>
            </section>
            <section id="art3-cargaDatos" class="">
                <div id="info-docente">
                    <table class="">
                        <tbody>
                            <tr>
                                <td>No hay datos asociados</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>   
        <?php
    }
}


//----------------------------------------------------------------------
//Accion a realizar cuando se desee agregar a un docente
//----------------------------------------------------------------------
if (isset($_POST['btnAgregarDocente'])) {
    $DAO_Docente= new DAO_Docente();
    
    $_rut = $_SESSION['txtRut'];
    $_dv = $_SESSION['txtDv'];
    $_idDuoc = $_SESSION['txtIdDuoc'];
    $_pNombre = $_SESSION['txtPNombre'];
    $_sNombre = $_SESSION['txtSNombre'];
    $_tNombre = $_SESSION['txtTNombre'];
    $_apPaterno = $_SESSION['txtApPaterno'];
    $_apMaterno = $_SESSION['txtApMaterno'];
    $_anioIngreso = $_SESSION['txtAnioIngreso'];
    $_correo1 = $_SESSION['txtCorreo1'];
    $_correo2 = $_SESSION['txtCorreo2'];
    $_telefonoFijo = $_SESSION['txtTelefonoFijo'];
    $_telefonoMovil = $_SESSION['txtTelefonoMovil'];
    $_escuelaPrograma = $_SESSION['txtEscuelaPrograma'];
    $_centroCosto = $_SESSION['txtCentroCosto'];
    $_tipoDocente = $_SESSION['txtTipoDocente'];
    $_gradoProfesional = $_SESSION['txtGradoProfesional'];
    
    if ($DAO_Docente->agregarDocente($_rut,$_dv,$_idDuoc,$_pNombre,$_sNombre,$_tNombre,$_apPaterno,$_apMaterno,$_anioIngreso,
        $_correo1,$_correo2,$_telefonoFijo,$_telefonoMovil,$_escuelaPrograma,$_centroCosto,$_tipoDocente,$_gradoProfesional)>0) {
        include_once 'V_IngresarDocente.php';
        return true;
    }else{
        return false;
    }
    
}


