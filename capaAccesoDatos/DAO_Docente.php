<?php

/*
 * To change this license header, choose L icense Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO_Docente
 *
 * @author Berni
 */
include_once '../capaEntidades/CL_Docente.php';
include_once '../capaEntidades/CL_DetallePAD.php';
include_once '../capaConexion/CL_Conexion.php';

class DAO_Docente {

    //variable para almacenar el estado de la conexion
    private $_conexion;

    function __construct() {
        //al crear una instancia de la clase, se obtiene de inmediato el estado de la conexión
        try {
            $this->_conexion = CL_Conexion::getInstancia();
        } catch (Exception $exc) {
            echo 'error al generar la instancia de conexion ' + $exc->getTraceAsString();
        }
    }

    public function agregarDocente($d_rut, $d_dv, $d_id_duoc, $d_pNombre, $d_sNombre, $d_tNombre, $apPaterno, $apMaterno, $d_anio_ingreso, $d_correo1, $d_correo2, $d_telefono_fijo, $d_telefono_movil, $d_id_escuela_programa, $d_id_centro_costo, $d_id_tipo_docente, $d_id_grado_profesional) {

        try {
            $stmt = $this->_conexion->getConexion()->prepare('CALL FN_AGREGAR_DOCENTE (?,?,?,?,?,?,?,?,?,?,?,?,?)'); //se llama a la función almacenada
            $stmt->bind_param('iisssssssssssssss', $d_rut, $d_dv, $d_id_duoc, $d_pNombre, $d_sNombre, $d_tNombre, $apPaterno, $apMaterno, $d_anio_ingreso, $d_correo1, $d_correo2, $d_telefono_fijo, $d_telefono_movil, $d_id_escuela_programa, $d_id_centro_costo, $d_id_tipo_docente, $d_id_grado_profesional);  //se reemplazan los argumentos por parámetros de tipo entero int ('i')
            $filasAfectadas = $stmt->execute();                     //se ejecuta la consulta  
            $stmt->close;    //se enlaza el retorno de la función a una variable bind
            
            return $filasAfectadas > 0 ? true : false;
        } catch (Exception $exc) {
            return null;
        }
    }

    public function listarDocente() {
        try {

            $sql = "SELECT * FROM docente ";
            $respuesta = $this->mysqli->query($sql);

            $docentes = [];

            while ($row = $respuesta->fetch_assoc()) {
                $docente = new CL_Docente();
                $docente->set_rut($row['rut']);
                $docente->set_dv($row['dv']);
                $docente->set_id($row['id']);
                $docente->set_pNombre($row['pNombre']);
                $docente->set_sNombre($row['sNombre']);
                $docente->set_apPaterno($row['apPaterno']);
                $docente->set_apMaterno($row['apMaterno']);
                $docente->set_idCentroCosto($row['idCentroCosto']);
                $docente->set_correo1($row['correo1']);
                $docente->set_correo2($row['correo2']);
                $docente->set_correo3($row['correo3']);
                $docente->set_telefonoFijo($row['fonoFijo']);
                $docente->set_telefonoMovil($row['fonoMovil']);

                $docentes[] = $docente;
            }
            $this->mysqli->close();

            return $personas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function eliminarDocente($rut) {
        try {

            $sql = "delete from docente where rut = $rut";
            $this->mysqli->query($sql);

            if ($this->mysqli->affected_rows > 0) {
                return true;
            }

            return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //metodo que realiza la busqueda de la información personal del docente
    public function buscarDocentePorRut($rut) {
        try {

            $stmt = $this->_conexion->getConexion()->prepare("select 
                                                                RUT, 
                                                                DV,
                                                                lower(concat(PNOMBRE , ' ' , SNOMBRE )) AS 'NOMBRE',
                                                                lower(APATERNO) AS 'APATERNO',
                                                                lower(AMATERNO) AS 'AMATERNO',	
                                                                ANIO_INGRESO,
                                                                substr(CC.DESCRIPCION,6,length(CC.DESCRIPCION)) AS 'CECO',
                                                                ES.DESCRIPCION AS 'ESCUELA O PROGRAMA',
                                                                lower(CORREO1) 'CORREO INSTITUCIONAL',
                                                                case CORREO2
                                                                        when 'NULL' THEN 'No Registrado'
                                                                        else lower(CORREO2) 
                                                                end AS 'CORREO PERSONAL',
                                                                case TELEFONOMOVIL
                                                                        when 'NULL' THEN 'No Registrado'
                                                                        else TELEFONOMOVIL
                                                                end AS 'TELEFONOMOVIL',
                                                                TD.DESCRIPCION AS 'TIPO DOCENTE',
                                                                LOWER(GP.DESCRIPCION)  AS 'GRADO PROFESIONAL'
                                                                from docentes D
                                                                JOIN escuela_o_programa ES
                                                                ON D.ID_ESCUELA_O_PROGRAMA = ES.ID_ESCUELA
                                                                JOIN CENTRO_COSTO CC
                                                                ON CC.ID_CENTRO_COSTO = D.ID_CENTRO_COSTO
                                                                JOIN TIPO_DOCENTE TD
                                                                ON TD.ID_TIPO_DOCENTE = D.ID_TIPO_DOCENTE
                                                                JOIN GRADO_PROFESIONAL GP
                                                                ON GP.ID_GRADO_PROFESIONAL = D.ID_GRADO_PROFESIONAL
                                                                where concat(RUT,DV) = ?");
            $stmt->bind_param('s', $rut);
            $stmt->execute();
            $stmt->bind_result($d_rut, $d_dv, $d_nombre, $d_apaterno, $d_amaterno, $d_anioIngreso, $d_ceco, $d_escuelaPrograma, $d_correo1, $d_correo2, $d_telefonoMovil, $d_tipoDocente, $d_gradoProfesional);
            $docente = null;
            while ($stmt->fetch()) {
                $docente = new CL_Docente();
                $docente->set_rut($d_rut);
                $docente->set_dv($d_dv);
                $docente->set_pNombre($d_nombre);
                $docente->set_apPaterno($d_apaterno);
                $docente->set_apMaterno($d_amaterno);
                $docente->set_anioIngreso($d_anioIngreso);
                $docente->set_idCentroCosto($d_ceco);
                $docente->set_idEscuelaPrograma($d_escuelaPrograma);
                $docente->set_correo1($d_correo1);
                $docente->set_correo2($d_correo2);
                $docente->set_telefonoMovil($d_telefonoMovil);
                $docente->set_idTipoDocente($d_tipoDocente);
                $docente->set_idGradoProfesional($d_gradoProfesional);
            }
            $stmt->close();
            return $docente;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //metodo que presenta todos los docentes de la escuela seleccionada
    public function buscarDocentePorEscuela($idEscuela) {
        try {

            $stmt = $this->_conexion->getConexion()->prepare("select 
                                                                RUT, 
                                                                DV,
                                                                lower(concat(PNOMBRE , ' ' , SNOMBRE )) AS 'NOMBRE',
                                                                lower(APATERNO) AS 'APATERNO',
                                                                lower(AMATERNO) AS 'AMATERNO',	
                                                                lower(CORREO1) 'CORREO INSTITUCIONAL',
                                                                case TELEFONOMOVIL
                                                                        when 'NULL' THEN 'No Registrado'
                                                                        else TELEFONOMOVIL
                                                                end AS 'TELEFONOMOVIL'
                                                                from docentes D
                                                                JOIN escuela_o_programa ES
                                                                ON D.ID_ESCUELA_O_PROGRAMA = ES.ID_ESCUELA
                                                                JOIN CENTRO_COSTO CC
                                                                ON CC.ID_CENTRO_COSTO = D.ID_CENTRO_COSTO
                                                                where ES.id_escuela = ?
                                                                order by PNOMBRE asc");
            $stmt->bind_param('i', $idEscuela);
            $stmt->execute();
            return $stmt;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscarIndicadorPAD($rut) {
        try {

            $stmt = $this->_conexion->getConexion()->prepare("SELECT 
                                                                P.ANIO, 
                                                                P.SEMESTRE,
                                                                DP.PORCENTAJE 
                                                             FROM DETALLE_PAD DP
                                                             JOIN PAD P
                                                             ON DP.ID_PAD = P.ID_PAD
                                                             JOIN DOCENTES D 
                                                             ON DP.RUT = D.RUT
                                                             WHERE concat(D.RUT,D.DV) = ?");
            $stmt->bind_param('s', $rut);
            $stmt->execute();
            $stmt->bind_result($pad_anio, $pad_semestre, $pad_porcentaje);
            $detallePAD = null;
            while ($stmt->fetch()) {

                $detallePAD = new CL_DetallePAD();
                $detallePAD->set_anio($pad_anio);
                $detallePAD->set_semestre($pad_semestre);
                $detallePAD->set_porcentaje($pad_porcentaje);
            }
            $stmt->close();
            return $detallePAD;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function filtrarDocentePorEscuela($idEscuela, $filtro) {
        try {

            $stmt = $this->_conexion->getConexion()->prepare("select 
                                                                RUT, 
                                                                DV,
                                                                lower(concat(PNOMBRE , ' ' , SNOMBRE )) AS 'NOMBRE',
                                                                lower(APATERNO) AS 'APATERNO',
                                                                lower(AMATERNO) AS 'AMATERNO',	
                                                                lower(CORREO1) 'CORREO INSTITUCIONAL',
                                                                case TELEFONOMOVIL
                                                                        when 'NULL' THEN 'No Registrado'
                                                                        else TELEFONOMOVIL
                                                                end AS 'TELEFONOMOVIL'
                                                                from docentes D
                                                                JOIN escuela_o_programa ES
                                                                ON D.ID_ESCUELA_O_PROGRAMA = ES.ID_ESCUELA
                                                                JOIN CENTRO_COSTO CC
                                                                ON CC.ID_CENTRO_COSTO = D.ID_CENTRO_COSTO
                                                                where ES.id_escuela = ? and 
                                                                (RUT LIKE '%" . $filtro . "%' OR LOWER(PNOMBRE) LIKE '%" . $filtro . "%' OR UPPER(PNOMBRE) LIKE '%" . $filtro . "%' OR
                                                                 LOWER(APATERNO) LIKE '%" . $filtro . "%' OR UPPER(APATERNO) LIKE '%" . $filtro . "%' OR 
                                                                 LOWER(AMATERNO) LIKE '%" . $filtro . "%' OR UPPER(AMATERNO) LIKE '%" . $filtro . "%')
                                                                order by PNOMBRE asc");
            $stmt->bind_param('i', $idEscuela);
            $stmt->execute();
            return $stmt;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function modificarDocente(CL_Docente $docente) {


        try {
            $rut = $docente->get_rut();
            $dv = $docente->get_dv();
            $id = $docente->get_id();
            $pNombre = $docente->get_pNombre();
            $sNombre = $docente->get_sNombre();
            $apPaterno = $docente->get_apPaterno();
            $apMaterno = $docente->get_apMaterno();
            $idCentroCosto = $docente->get_idCentroCosto();
            $correo1 = $docente->get_correo1();
            $correo2 = $docente->get_correo2();
            $correo3 = $docente->get_correo3();
            $fonoFijo = $docente->get_fonoFijo();
            $fonoMovil = $docente->get_fonoMovil();


            $sql = "update docente set rut ='$rut', dv='$div',id='id',pNombre='$pNombre',sNombre='$sNombre',apPaterno='$apPaterno',apMaterno='$apMaterno',idCentroCosto='$idCentroCosto',correo1='$correo1',correo2='$correo2',correo3='$correo3',fonoFijo='$fonoFijo',fonoMovil='$fonoMovil'  where rut = $rut ";

            $this->mysqli->query($sql);

            if ($this->mysqli->affected_rows > 0) {
                $this->mysqli->close();
                return true;
            }

            $this->mysqli->close();

            return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
