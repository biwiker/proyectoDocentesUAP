<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO_Usuario
 *
 * @author adolfo
 */
include_once 'capaEntidades/CL_Usuario.php';
include_once 'capaConexion/CL_Conexion.php';

class DAO_Usuario {

    private $mysqli;

    function __construct() {
        try {
            $conexion = new Conexion();
            $this->mysqli = $conexion->abrirConexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscarUsuario($rut) {
        try {

            $sql = "select * from usuario where rut = $rut";

            $respuesta = $this->mysqli->query($sql);

            $row = $respuesta->fetch_assoc();

            if ($row == null) {
                return null;
            }
            $usuario = new CL_Usuario();
            $usuario->setRut($row['rut']);
            $usuario->setPnombre($row['pnombre']);
            $usuario->setSnombre($row['snombre']);
            $usuario->setApellidoP($row['appaterno']);
            $usuario->setApellidoM($row['apmaterno']);
            $usuario->setCorreo($row['correo']);

            $this->mysqli->close();

            return $usuario;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function modificarUsuario(CL_Usuario $usuario) {

        try {
            $rut = $usuario->getRut();
            $pNombre = $usuario->getPNombre();
            $sNombre = $usuario->getSNombre();
            $apPaterno = $usuario->getApellidoP();
            $apMaterno = $usuario->getApellidoM();
            $correo = $usuario->getCorreo();

            $sql = "update usuario set rut ='$rut',pnombre='$pNombre',pnombre='$sNombre',appaterno='$apPaterno',apmaterno='$apMaterno', correo='$correo'";

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

    public function eliminarUsuario($rut) {
        try {

            $sql = "delete from usuario where rut = $rut";
            $this->mysqli->query($sql);

            if ($this->mysqli->affected_rows > 0) {
                return true;
            }

            return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function listarUsuarios() {
        try {

            $sql = "SELECT * FROM USUARIO ";
            $respuesta = $this->mysqli->query($sql);

            $listaUsuarios = [];

            while ($row = $respuesta->fetch_assoc()) {
                $usuario = new CL_Usuario();
                $usuario->setRut($row['rut']);
                $usuario->setPnombre($row['pnombre']);
                $usuario->setSnombre($row['snombre']);
                $usuario->setApellidoP($row['appaterno']);
                $usuario->setApellidoM($row['apmaterno']);
                $usuario->setCorreo($row['correo']);

                $listaUsuarios[] = $usuario;
            }
            $this->mysqli->close();

            return $listaUsuarios;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function agregarUsuario(CL_Usuario $usuario) {

        try {
            $rut = $usuario->getRut();
            $nombre1 = $usuario->getPNombre();
            $nombre2 = $usuario->getSNombre();
            $apellido1 = $usuario->getApellidoP();
            $apellido2 = $usuario->getApellidoM();
            $correo = $usuario->getCorreo();

            $sql = "insert into usuario(rut, pnombre, snombre, appaterno,apmaterno, correo)values"
                    . "('$rut','$nombre1','$nombre2','$apellido1','$apellido2','$correo')";

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
