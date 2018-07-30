<?php

/**
 * Description of CL_Docente
 * @author 
 */
class CL_Docente {
   private $rut;
   private $dv;
   private $id;  //(id de casa central)
   private $pNombre;
   private $sNombre;
   private $apPaterno;
   private $apMaterno;
   private $idCentroCosto;
   private $correo1;
   private $correo2;
   private $correo3;
   private $fonoFijo;
   private $fonoMovil;
   
   function __construct() {
       
   }
   
   function getRut() {
       return $this->rut;
   }

   function getDv() {
       return $this->dv;
   }

   function getId() {
       return $this->id;
   }

   function getPNombre() {
       return $this->pNombre;
   }

   function getSNombre() {
       return $this->sNombre;
   }

   function getApPaterno() {
       return $this->apPaterno;
   }

   function getApMaterno() {
       return $this->apMaterno;
   }

   function getIdCentroCosto() {
       return $this->idCentroCosto;
   }

   function getCorreo1() {
       return $this->correo1;
   }

   function getCorreo2() {
       return $this->correo2;
   }

   function getCorreo3() {
       return $this->correo3;
   }

   function getFonoFijo() {
       return $this->fonoFijo;
   }

   function getFonoMovil() {
       return $this->fonoMovil;
   }

   function setRut($rut) {
       $this->rut = $rut;
   }

   function setDv($dv) {
       $this->dv = $dv;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setPNombre($pNombre) {
       $this->pNombre = $pNombre;
   }

   function setSNombre($sNombre) {
       $this->sNombre = $sNombre;
   }

   function setApPaterno($apPaterno) {
       $this->apPaterno = $apPaterno;
   }

   function setApMaterno($apMaterno) {
       $this->apMaterno = $apMaterno;
   }

   function setIdCentroCosto($idCentroCosto) {
       $this->idCentroCosto = $idCentroCosto;
   }

   function setCorreo1($correo1) {
       $this->correo1 = $correo1;
   }

   function setCorreo2($correo2) {
       $this->correo2 = $correo2;
   }

   function setCorreo3($correo3) {
       $this->correo3 = $correo3;
   }

   function setFonoFijo($fonoFijo) {
       $this->fonoFijo = $fonoFijo;
   }

   function setFonoMovil($fonoMovil) {
       $this->fonoMovil = $fonoMovil;
   }



}
