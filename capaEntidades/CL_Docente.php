<?php

/**
 * Description of CL_Docente
 * @author 
 */
class CL_Docente {

    private $_rut;
    private $_dv;
    private $_idDuoc;  //(id de casa central)
    private $_pNombre;
    private $_sNombre;
    private $_tNombre;
    private $_apPaterno;
    private $_apMaterno;
    private $_anioIngreso;
    private $_correo1;
    private $_correo2;
    private $_telefonoFijo;
    private $_telefonoMovil;
    private $_idEscuelaPrograma;
    private $_idTipoDocente;
    private $_idCentroCosto;
    private $_idGradoProfesional;

    function __construct() {
        
    }

    function get_rut() {
        return $this->_rut;
    }

    function get_dv() {
        return $this->_dv;
    }

    function get_idDuoc() {
        return $this->_idDuoc;
    }

    function get_pNombre() {
        return $this->_pNombre;
    }

    function get_sNombre() {
        return $this->_sNombre;
    }

    function get_tNombre() {
        return $this->_tNombre;
    }

    function get_apPaterno() {
        return $this->_apPaterno;
    }

    function get_apMaterno() {
        return $this->_apMaterno;
    }

    function get_anioIngreso() {
        return $this->_anioIngreso;
    }

    function get_correo1() {
        return $this->_correo1;
    }

    function get_correo2() {
        return $this->_correo2;
    }

    function get_telefonoFijo() {
        return $this->_telefonoFijo;
    }

    function get_telefonoMovil() {
        return $this->_telefonoMovil;
    }

    function get_idEscuelaPrograma() {
        return $this->_idEscuelaPrograma;
    }

    function get_idTipoDocente() {
        return $this->_idTipoDocente;
    }

    function get_idCentroCosto() {
        return $this->_idCentroCosto;
    }

    function get_idGradoProfesional() {
        return $this->_idGradoProfesional;
    }

    function set_rut($_rut) {
        $this->_rut = $_rut;
    }

    function set_dv($_dv) {
        $this->_dv = $_dv;
    }

    function set_idDuoc($_idDuoc) {
        $this->_idDuoc = $_idDuoc;
    }

    function set_pNombre($_pNombre) {
        $this->_pNombre = $_pNombre;
    }

    function set_sNombre($_sNombre) {
        $this->_sNombre = $_sNombre;
    }

    function set_tNombre($_tNombre) {
        $this->_tNombre = $_tNombre;
    }

    function set_apPaterno($_apPaterno) {
        $this->_apPaterno = $_apPaterno;
    }

    function set_apMaterno($_apMaterno) {
        $this->_apMaterno = $_apMaterno;
    }

    function set_anioIngreso($_anioIngreso) {
        $this->_anioIngreso = $_anioIngreso;
    }

    function set_correo1($_correo1) {
        $this->_correo1 = $_correo1;
    }

    function set_correo2($_correo2) {
        $this->_correo2 = $_correo2;
    }

    function set_telefonoFijo($_telefonoFijo) {
        $this->_telefonoFijo = $_telefonoFijo;
    }

    function set_telefonoMovil($_telefonoMovil) {
        $this->_telefonoMovil = $_telefonoMovil;
    }

    function set_idEscuelaPrograma($_idEscuelaPrograma) {
        $this->_idEscuelaPrograma = $_idEscuelaPrograma;
    }

    function set_idTipoDocente($_idTipoDocente) {
        $this->_idTipoDocente = $_idTipoDocente;
    }

    function set_idCentroCosto($_idCentroCosto) {
        $this->_idCentroCosto = $_idCentroCosto;
    }

    function set_idGradoProfesional($_idGradoProfesional) {
        $this->_idGradoProfesional = $_idGradoProfesional;
    }

}
