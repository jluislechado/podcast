<!DOCTYPE html>

<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

$usuario=$sesion->get("usuario");
if($usuario==null)
{
    header("Location:index.php");
    exit();
}
//El siguiente trozo de código crea una carpeta para el usuario si no está creada
//Cuando trabajemos con BBDD, este código se implementará en el registro
$carpeta='../usuarios/'.$usuario;
$publico='../usuarios/'.$usuario.'/publico';
$privado='../usuarios/'.$usuario.'/privado';
if(!file_exists($carpeta))
{
    mkdir($carpeta, 0777, true);
    mkdir($publico, 0777, true);
    mkdir($privado, 0777, true);
}    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Podcasting Usuario</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"/>
    </head>
    <body>
        <div id="cuerpo">
            <div id="cabecera"></div>
            <div id="formulario">
                <div id="formulariIzq">
                <div id="triangulo"></div>
                <div id="subirPodcast"><a href="usuarioSubir.php"><span>Subir Podcast</span></a></div>
                <div class="triangulo"></div>
                <div id="listarPodcast"><a href="elegirCategoria.php"><span>Listar Podcasts</span></a></div>
                <div class="triangulo"></div>
                <div id="listarUsuarios"><a href="listaUsuarios.php"><span>Otros podcast</span></a></div>
                <div class="triangulo"></div>
                <div id="borrarCancion"><a href="borrarCancion.php"><span>Borrar podcast</span></a></div>
                <div class="triangulo"></div>
                <div id="salirUsuario"><a href="phplogout.php"><span>Salir y cerrar sesión</span></a></div>
                </div>
                <div id="formularioDerecha"></div>
            </div>
        </div>
    </body>
</html>
