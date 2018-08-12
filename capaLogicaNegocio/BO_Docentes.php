<?php
include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';

if (isset($_POST['btnVerDocente'])) {

    $Docente = new CL_Docente();

    $rut = $_POST['txtRut'];

    $DAO_Docente = new DAO_Docente();
    //buscar información del docente
    $Docente = $DAO_Docente->buscarDocente($rut);
    if (!is_null($Docente)) {
        ?>
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
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Nombre del docente:</b></td>
                                    <td><?php echo $Docente->getPNombre(); ?> <?php echo $Docente->getApPaterno() ?> <?php echo $Docente->getApMaterno() ?></td>
                                    <td style="background-color: #F4F6F7"><b>RUN:</b></td>
                                    <td><?php echo $Docente->getRut(); ?>-<?php echo $Docente->getDv(); ?> </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Escuela o Programa:</b></td>
                                    <td><?php echo $Docente->getEscuelaPrograma(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Sede:</td>
                                    <td><?php echo $Docente->getCentroCosto(); ?></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Correo Institucional:</b></td>
                                    <td><?php echo $Docente->getCorreo1(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Correo Personal:</b></td>
                                    <td><?php echo $Docente->getCorreo2(); ?></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #F4F6F7"><b>Tel&eacute;fono M&oacute;vil:</b></td>
                                    <td><?php echo $Docente->getFonoMovil(); ?></td>
                                    <td style="background-color: #F4F6F7"><b>Tel&eacute;fono Fijo:</b></td>
                                    <td><?php echo $Docente->getFonoFijo(); ?></td>
                                </tr>
                            </tbody>
                        </table>
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
?>

