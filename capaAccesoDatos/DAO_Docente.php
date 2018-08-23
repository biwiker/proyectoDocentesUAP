<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO_Docente
 *
 * @author Berni
 */
include_once '../capaEntidades/CL_Docente.php';
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
    
    public function agregarDocente(CL_Docente $doncete) {

        try {
            $rut = $doncete->getRut();
            $dv = $doncete->getDv();
            $id = $doncete->getId();
            $pNombre = $doncete->getPNombre();
            $sNombre = $doncete->getSNombre();
            $apPaterno = $doncete->getApPaterno();
            $apMaterno = $doncete->getApMaterno();
            $idCentroCosto = $doncete->getIdCentroCosto();
            $correo1 = $doncete->getCorreo1();
            $correo2 = $doncete->getCorreo2();
            $correo3 = $doncete->getCorreo3();
            $fonoFijo = $doncete->getFonoFijo();
            $fonoMovil = $doncete->getFonoMovil();

            $sql = "insert into docente(rut,dv,id,pNombre,sNombre,apPaterno,apMaterno,idCentroCosto,correo1,correo2,correo3,fonoFijo,fonoMovil) values
                 ('$rut','$dv','$id','$pNombre','$sNombre','$apPaterno','$apMaterno','$idCentroCosto','$correo1','$correo2','$correo3','$fonoFijo','$fonoMovil')";


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

    public function listarDocente() {
        try {

            $sql = "SELECT * FROM docente ";
            $respuesta = $this->mysqli->query($sql);

            $docentes = [];

            while ($row = $respuesta->fetch_assoc()) {
                $docente = new CL_Docente();
                $docente->setRut($row['rut']);
                $docente->setDv($row['dv']);
                $docente->setId($row['id']);
                $docente->setPNombre($row['pNombre']);
                $docente->setSNombre($row['sNombre']);
                $docente->setApPaterno($row['apPaterno']);
                $docente->setApMaterno($row['apMaterno']);
                $docente->setIdCentroCosto($row['idCentroCosto']);
                $docente->setCorreo1($row['correo1']);
                $docente->setCorreo2($row['correo2']);
                $docente->setCorreo3($row['correo3']);
                $docente->setFonoFijo($row['fonoFijo']);
                $docente->setFonoMovil($row['fonoMovil']);

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

    public function buscarDocente($rut) {
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
            $stmt->bind_param('s',$rut);  
            $stmt->execute();
            $stmt->bind_result($d_rut,$d_dv,$d_nombre,$d_apaterno,$d_amaterno,$d_anioIngreso,$d_ceco,$d_escuelaPrograma, $d_correo1,$d_correo2,$d_telefonoMovil,$d_tipoDocente,$d_gradoProfesional);
            $docente = null;
            while ($stmt->fetch()) {
                $docente = new CL_Docente();
                $docente->setRut($d_rut);
                $docente->setDv($d_dv);
                $docente->setPNombre($d_nombre);                
                $docente->setApPaterno($d_apaterno);
                $docente->setApMaterno($d_amaterno);
                $docente->setAnioIngreso($d_anioIngreso);
                $docente->setCentroCosto($d_ceco);                
                $docente->setEscuelaPrograma($d_escuelaPrograma);                
                $docente->setCorreo1($d_correo1);
                $docente->setCorreo2($d_correo2);
                $docente->setFonoMovil($d_telefonoMovil);
                $docente->setTipoDocente($d_tipoDocente);
                $docente->setGradoProfesional($d_gradoProfesional);
                
            }
            $stmt->close();
            return $docente;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
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
            $stmt->bind_param('i',$idEscuela);  
            $stmt->execute();
            return $stmt;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function modificarDocente(CL_Docente $docente) {


        try {
            $rut = $docente->getRut();
            $dv = $docente->getDv();
            $id = $docente->getId();
            $pNombre = $docente->getPNombre();
            $sNombre = $docente->getSNombre();
            $apPaterno = $docente->getApPaterno();
            $apMaterno = $docente->getApMaterno();
            $idCentroCosto = $docente->getIdCentroCosto();
            $correo1 = $docente->getCorreo1();
            $correo2 = $docente->getCorreo2();
            $correo3 = $docente->getCorreo3();
            $fonoFijo = $docente->getFonoFijo();
            $fonoMovil = $docente->getFonoMovil();


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
