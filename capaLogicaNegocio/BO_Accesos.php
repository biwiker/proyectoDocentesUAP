<?php
    
   include_once '../capaEntidades/CL_Acceso.php';
   include_once '../capaAccesoDatos/DAO_Acceso.php';
     
   //se crea una clase de acceso con los datos del login
   $CL_Acceso = new CL_Acceso();
   $CL_Acceso->setRut($_POST['txtUsuario']);
   $CL_Acceso->setPassword($_POST['txtClave']);
   
   //creamos una clase DAO, y le envío la clase creada
   $DAO_Acceso = new DAO_Acceso();
   $resultado = $DAO_Acceso->login($CL_Acceso);
       
   
   
   //si el metodo retorna un null
   if ($resultado != null) {
       
       if ($resultado == 'Administrador') {
           //se redirecciona a la pagina del admin
       }else if($resultado == 'Asesor'){
           //se redirecciona a la pagina del asesor
       }else{
           //se redirecciona a la pagina del login
       }
       
       
       
       
   }else{
       //se redirecciona a la pagina del login
   }
   
   
   
   
   

