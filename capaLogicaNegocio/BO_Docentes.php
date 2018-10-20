<?php
include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';

    include_once '../capaAccesoDatos/DAO_Escuela.php';
    include_once '../capaAccesoDatos/DAO_CentroCosto.php';
    include_once '../capaAccesoDatos/DAO_GradoProfesional.php';
    include_once '../capaAccesoDatos/DAO_TipoDocente.php';




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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventanaAgregarDocente">
                    Agregar Docente
            </button>
            <input type="text" value="">
            <input type="button" value="Buscar">
            <input type="button" value="Eliminar Seleccionados">
            
            <?php include_once '../capaPresentacion/V_AgregarDocente.php';?>
            
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
                        echo "                <td>" . $docente->get_pNombre() . " " . $docente->get_apPaterno() . " " . $docente->get_apMaterno() . "</td>";
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
    $DAO_Docente = new DAO_Docente();
    $docente = new CL_Docente();
    $_rut               = $_POST['txtRut'];
    $_dv                = $_POST['txtDv'];
    $_idDuoc            = $_POST['txtIdDuoc'];
    $_pNombre           = $_POST['txtPNombre'];
    $_sNombre           = $_POST['txtSNombre'];
    $_tNombre           = $_POST['txtTNombre'];
    $_apPaterno         = $_POST['txtApPaterno'];
    $_apMaterno         = $_POST['txtApMaterno'];
    $_anioIngreso       = $_POST['ddlAnioIngreso'];
    $_correo1           = $_POST['txtCorreo1'];
    $_correo2           = $_POST['txtCorreo2'];
    $_telefonoFijo      = $_POST['txtTelefonoFijo'];
    $_telefonoMovil     = $_POST['txtTelefonoMovil'];
    $_idEscuelaPrograma = $_POST['ddlEscuela'];
    $_idCentroCosto     = $_POST['ddlCentroCosto'];
    $_idTipoDocente     = $_POST['ddlTipodocente'];
    $_idGradoProfesional= $_POST['ddlGradoProfesional'];

    if ($DAO_Docente->agregarDocente($_rut, $_dv, $_idDuoc, $_pNombre, $_sNombre, $_tNombre, $_apPaterno, $_apMaterno, $_anioIngreso, $_correo1, $_correo2, $_telefonoFijo, $_telefonoMovil, $_idEscuelaPrograma, $_idCentroCosto, $_idTipoDocente, $_idGradoProfesional) > 0) {
        header('Location: ../capaPresentacion/V_Formato_Lista.php?si');
        
    } else {
        header('Location: ../capaPresentacion/V_Formato_Lista.php?no');
    }
}



//----------------------------------------------------------------------
//Accion a realizar cuando se desee modificar a un docente
//----------------------------------------------------------------------
if (isset($_POST['btnModificarDocente'])) {
    

    $DAO_Docente = new DAO_Docente();  
    
    if (empty($_POST)) {
        
        if (!isset($_GET['rut'])) {
            header("location: V_Formato_Lista.php"); 
        }
        $_rut = $_GET['rut'];
        $docente = $DAO_Docente->buscarDocentePorRut($_rut);
        
        include_once 'capaPresentacion/V_Formato_lista.php';
        return;
    }
    
    $docente=NEW CL_Docente();
    
    $docente->set_rut($_POST['txtRut']);
    $docente->set_dv($_POST['txtDv']);
    $docente->set_idDuoc($_POST['txtIdDuoc']);
    $docente->set_pNombre($_POST['txtPNombre']);
    $docente->set_sNombre($_POST['txtSNombre']);
    $docente->set_tNombre($_POST['txtTNombre']);
    $docente->set_apPaterno($_POST['txtApPaterno']);
    $docente->set_apMaterno($_POST['txtApMaterno']);
    $docente->set_anioIngreso($_POST['ddlAnioIngreso']);
    $docente->set_correo1($_POST['txtCorreo1']);
    $docente->set_correo2($_POST['txtCorreo2']);
    $docente->set_telefonoFijo($_POST['txtTelefonoFijo']);
    $docente->set_telefonoMovil($_POST['txtTelefonoMovil']);
    $docente->set_idEscuelaPrograma($_POST['ddlEscuela']);
    $docente->set_idCentroCosto($_POST['ddlCentroCosto']);
    $docente->set_idTipoDocente($_POST['ddlTipodocente']);
    $docente->set_idGradoProfesional($_POST['ddlGradoProfesional']);

    if ($DAO_Docente->modificarDocente($_rut, $_dv, $_idDuoc, $_pNombre, $_sNombre, $_tNombre, $_apPaterno, $_apMaterno, $_anioIngreso, $_correo1, $_correo2, $_telefonoFijo, $_telefonoMovil, $_idEscuelaPrograma, $_idCentroCosto, $_idTipoDocente, $_idGradoProfesional) > 0) {
        header('Location: ../capaPresentacion/V_Formato_Lista.php?si');
        
    } else {
        header('Location: ../capaPresentacion/V_Formato_Lista.php?no');
    }
}

