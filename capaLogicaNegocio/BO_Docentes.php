<?php
include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';

if (isset($_POST['btnVerDocente'])) {

    $Docente = new CL_Docente();

    $rut = $_POST['txtRut'];

    $DAO_Docente = new DAO_Docente();
    $Docente = $DAO_Docente->buscarDocente($rut);
    ?>
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
                <td></td>
                <td style="background-color: #F4F6F7"><b>Sede:</td>
                <td></td>
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

    <?php
}
?>

