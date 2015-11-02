<?php

require '../clases/Request.php';
require '../clases/UploadFile.php';
require '../clases/AutoCarga.php';

$sesion = new Session();
$usuario=$sesion->get("usuario");
$privacidad= Request::post("privacidad");
$categoria = Request::post("categoria");
$carpeta='../usuarios/'.$usuario.'/'.$privacidad.'/'.$categoria;
if(!file_exists($carpeta))
{
    mkdir($carpeta, 0777, true);
} 
$subir= new UploadFile("archivo");
$subir->setDestino("../usuarios/$usuario/$privacidad/$categoria/");
$subir->setPolitica(UploadFile::RENOMBRAR);
if($subir->upload()){
    header('Location:subido.php');
} else{
    header('Location:noSubido.php');
}

