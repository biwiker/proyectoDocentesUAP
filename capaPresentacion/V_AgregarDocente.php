<?php
@session_start();

if (isset($_SESSION['nombre_usuario'])) {
    include_once '../capaAccesoDatos/DAO_Escuela.php';
    include_once '../capaAccesoDatos/DAO_CentroCosto.php';
    include_once '../capaAccesoDatos/DAO_GradoProfesional.php';
    include_once '../capaAccesoDatos/DAO_TipoDocente.php';
    ?>
    <!-- ventana Modal -->
    <div class="modal fade" id="ventanaAgregarDocente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  >
            <div class="modal-content" >
                <!--cabecera de ventana modal-->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo Docente</h5>
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                <div class="modal-body" >

                    <form action="../capaLogicaNegocio/BO_Docentes.php" method="POST"id="formulario">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><p>Rut del docente(*): </p></td>
                                    <td style="background-color: #ffffff"><input type="number" name="txtRut" /></td>
                                    <td><p>DV del docente(*): </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtDv" /></td>
                                </tr>
                                <tr>
                                    <td ><p>Id Duoc del docente(*): </p></td>
                                    <td style="background-color: #ffffff"> <input type="number" name="txtIdDuoc" ></td>
                                    <td ><p>Primer Nombre del docente(*): </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtPNombre" ></td>

                                </tr>
                                <tr>
                                    <td ><p>Segundo Nombre del docente: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtSNombre" ></td>
                                    <td ><p>Tercer Nombre del docente: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtTNombre" ></td>

                                </tr>
                                <tr>
                                    <td ><p>Apellido Paterno del docente(*): </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtApPaterno" ></td>
                                    <td ><p>Apellido Materno del docente(*): </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtApMaterno" ></td>

                                </tr>
                                <tr>
                                    <td ><p>Año de ingreso: </p></td>
                                    <td style="background-color: #ffffff"> 
                                        <select name="ddlAnioIngreso" >
                                            <?php
                                            //se genera una lista de años hasta el año de la fecha actual
                                            for ($x = 2000; $x <= date("Y"); $x++) {
                                                echo "<option value='" . $x . "'>" . $x . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td> <p>Correo 1 del docente: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtCorreo1" ></td>

                                </tr>
                                <tr>
                                    <td> <p>Correo 2 del ingreso: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtCorreo2" ></td>
                                    <td ><p>Telefono Fijo del docente: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtTelefonoFijo" ></td>

                                </tr>
                                <tr>
                                    <td ><p>Telefono Movil del ingreso: </p></td>
                                    <td style="background-color: #ffffff"> <input type="text" name="txtTelefonoMovil" ></td>
                                    <td ><p>Escuela del docente: </p></td>
                                    <td style="background-color: #ffffff">
                                        <select name="ddlEscuela" id="ddlEscuela" >
                                            <?php
                                            $DAO_Escuela = new DAO_Escuela();
                                            $listaEscuelas = $DAO_Escuela->buscarEscuela();
                                            foreach ($listaEscuelas as $escuela) {
                                                echo "<option value='" . $escuela->getIdEscuela() . "'>" . $escuela->getDescripcion() . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td ><p>Centro Costo del docente: </p></td>
                                    <td style="background-color: #ffffff">
                                        <select name="ddlCentroCosto" id="ddlCentroCosto" >
                                            <?php
                                            $DAO_CentroCosto = new DAO_CentroCosto();
                                            $listaCC = $DAO_CentroCosto->buscarCentroCosto();
                                            foreach ($listaCC as $cc) {
                                                echo "<option value='" . $cc->getIdCentroCosto() . "'>" . $cc->getDescripcion() . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td ><p>Tipo del docente: </p></td>
                                    <td style="background-color: #ffffff">
                                        <select name="ddlTipodocente" id="ddlTipodocente" >
                                            <?php
                                            $DAO_Tipodocente = new DAO_Tipodocente();
                                            $listaTD = $DAO_Tipodocente->buscarTipoDocente();
                                            foreach ($listaTD as $td) {
                                                echo "<option value='" . $td->getIdTipoDocente() . "'>" . $td->getDescripcion() . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td ><p>Grado Profesional del ingreso: </p></td>
                                    <td style="background-color: #ffffff">
                                        <select name="ddlGradoProfesional" id="ddlGradoProfesional" >
                                            <?php
                                            $DAO_GradoProfesional = new DAO_GradoProfesional();
                                            $listaGP = $DAO_GradoProfesional->buscarGradoProfesional();
                                            foreach ($listaGP as $gp) {
                                                echo "<option value='" . $gp->getIdGradoProfesional() . "'>" . $gp->getDescripcion() . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        <!--botones para las acciones-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit"  name="btnAgregarDocente" form="formulario" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>                   

                </div>
                
                
            </div>
        </div>
    </div>
    <?php
} else {
    //redireccionar al login
    header('Location: V_Login.php');
}
?>