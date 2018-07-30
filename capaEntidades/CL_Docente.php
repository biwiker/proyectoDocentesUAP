<?php

/**
 * Description of CL_Docente
 * @author 
 */
class CL_Docente {
   private $_rut;
   private $_dv;
   private $_id;  //(id de casa central)
   private $_pNombre;
   private $_sNombre;
   private $_apPaterno;
   private $_apMaterno;
   private $_idCentroCosto;
   private $_correo1;
   private $_correo2;
   private $_correo3;
   private $_fonoFijo;
   private $_fonoMovil;
   
   function __construct() {
       
   }
   
   function getRut() {
       return $this->_rut;
   }

   function getDv() {
       return $this->_dv;
   }

   function getId() {
       return $this->_id;
   }

   function getPNombre() {
       return $this->_pNombre;
   }

   function getSNombre() {
       return $this->_sNombre;
   }

   function getApPaterno() {
       return $this->_apPaterno;
   }

   function getApMaterno() {
       return $this->_apMaterno;
   }

   function getIdCentroCosto() {
       return $this->_idCentroCosto;
   }

   function getCorreo1() {
       return $this->_correo1;
   }

   function getCorreo2() {
       return $this->_correo2;
   }

   function getCorreo3() {
       return $this->_correo3;
   }

   function getFonoFijo() {
       return $this->_fonoFijo;
   }

   function getFonoMovil() {
       return $this->_fonoMovil;
   }

   function setRut($rut) {
       $this->_rut = $rut;
   }

   function setDv($dv) {
       $this->_dv = $dv;
   }

   function setId($id) {
       $this->_id = $id;
   }

   function setPNombre($pNombre) {
       $this->_pNombre = $pNombre;
   }

   function setSNombre($sNombre) {
       $this->_sNombre = $sNombre;
   }

   function setApPaterno($apPaterno) {
       $this->_apPaterno = $apPaterno;
   }

   function setApMaterno($apMaterno) {
       $this->_apMaterno = $apMaterno;
   }

   function setIdCentroCosto($idCentroCosto) {
       $this->_idCentroCosto = $idCentroCosto;
   }

   function setCorreo1($correo1) {
       $this->_correo1 = $correo1;
   }

   function setCorreo2($correo2) {
       $this->_correo2 = $correo2;
   }

   function setCorreo3($correo3) {
       $this->_correo3 = $correo3;
   }

   function setFonoFijo($fonoFijo) {
       $this->_fonoFijo = $fonoFijo;
   }

   function setFonoMovil($fonoMovil) {
       $this->_fonoMovil = $fonoMovil;
   }



}
