<?php
include_once '../capaAccesoDatos/DAO_Docente.php';
include_once '../capaEntidades/CL_Docente.php';

if (isset($_POST['btnVerDocente'])) {

$Docente = new CL_Docente();

$rut = $_POST['txtRut'];

$DAO_Docente = new DAO_Docente();
$Docente = $DAO_Docente->buscarDocente($rut);
?>
<div style=" padding: 10px 0 10px 25px;">
    <table style="color: #999999; font-size: 12px;">
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><?php echo $Docente->getPNombre(); ?></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><?php echo $Docente->getApPaterno() ?>  <?php echo $Docente->getApMaterno() ?></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><?php echo $Docente->getCorreo1(); ?></td>
            </tr>
            <tr>
                <td>Correo 2</td>
                <td><?php echo $Docente->getCorreo2(); ?></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><?php echo $Docente->getFonoMovil(); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
}
?>

