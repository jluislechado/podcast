<?php

require '../clases/AutoCarga.php';
 $usuarios = array(
     "pedro" => "1",
     "pablo" => "2",
     "juan" => "3",
     "pili" => "4",
     "isabel" => "5"
 );
 
 $usuario = Request::post("usuario");
 $contrasena = Request::post("contrasena");
 $sesion = new Session();
 if($usuario=="admin" &&$contrasena=="admin")
 {
     $sesion->set("usuario", $usuario);
     header("Location:admin.php");
 }
 else{
    if(isset($usuarios[$usuario])&& $usuarios[$usuario]==$contrasena){
         $sesion->set("usuario", $usuario);
        header("Location:usuario.php");
    }else{
        $sesion->destroy();
        header("Location:index.php");
     }
 }
