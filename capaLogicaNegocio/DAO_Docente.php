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
include_once 'capaEntidades/CL_Docente.php';
include_once 'capaConexion/CL_Conexion.php';

class DAO_Docente {
    
    private $mysqli;

    function __construct() {
      try{
        $conexion = new Conexion();
        $this->mysqli = $conexion->conectar();
      } catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
    }
 
    
    public function agregarDocente(CL_Docente $doncete) {

        try{
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
         }catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
    }
    
    public function listarDocente() {
       try{
        
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
         }catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
    }
    
    public function eliminarDocente($rut) {
    try{
       
        $sql = "delete from docente where rut = $rut";
        $this->mysqli->query($sql);

        if ($this->mysqli->affected_rows > 0) {
            return true;
        }

        return false;
         }catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
    }
    
    public function buscarDocente($rut) {
        try{
         
         $sql = "select * from docente where rut = $rut" ;

        $respuesta = $this->mysqli->query($sql);

        $row = $respuesta->fetch_assoc();

        if ($row == null) {
            return null;
        }
            $docente=new CL_Docente();
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
        
        $this->mysqli->close();
        
        return $docente;
        
        
     
     }catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
        
    }
    
    public function modificarDocente(CL_Docente $docente) {

            
        try{
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

     
        $sql="update docente set rut ='$rut', dv='$div',id='id',pNombre='$pNombre',sNombre='$sNombre',apPaterno='$apPaterno',apMaterno='$apMaterno',idCentroCosto='$idCentroCosto',correo1='$correo1',correo2='$correo2',correo3='$correo3',fonoFijo='$fonoFijo',fonoMovil='$fonoMovil'  where rut = $rut ";
        
        $this->mysqli->query($sql);

        if ($this->mysqli->affected_rows > 0) {
            $this->mysqli->close();
            return true;
        }

        $this->mysqli->close();
        
        return false;
         }catch (Exception $exc){
          echo $exc->getTraceAsString();
      }
    }
    
    
}
