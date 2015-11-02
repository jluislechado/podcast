<!DOCTYPE html>
<?php
require '../clases/AutoCarga.php';
$sesion = new Session();
$usuario=$sesion->get("usuario");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"/>
    </head>
    <body>
        <div id="cuerpo">
            <div id="cabecera"></div>
            <div id="formulario">
                <div id="margen"></div>
                <div id="subidos"><span>Pincha sobre la canción que desea borrar</span></div>
                <div id="listarIzq">
                    <div id="publicos"><span>Podcasts públicos</span></div>
                    <ul>
                    <?php
                        echo Metodos::listar($usuario, "rock", "publico");
                        echo Metodos::listar($usuario, "pop", "publico");
                        echo Metodos::listar($usuario, "jazz", "publico");
                        echo Metodos::listar($usuario, "flamenco", "publico");
                        echo Metodos::listar($usuario, "bandaSonora", "publico");        
                    ?>
                    </ul>
                </div>
                <div id="listarDerecha">
                    <div id="privados"><span>Podcasts privados</span></div>
                    <ul>
                    <?php
                        echo Metodos::listar($usuario, "rock", "privado");
                        echo Metodos::listar($usuario, "pop", "privado");
                        echo Metodos::listar($usuario, "jazz", "privado");
                        echo Metodos::listar($usuario, "flamenco", "privado");
                        echo Metodos::listar($usuario, "bandaSonora", "privado");
                        $variable=  Request::get('src');
                    ?>
                    </ul>
                </div>
                <div id="volver">
                    <a href="usuario.php">Volver</a>
                </div>
            <?php
            if(file_exists($variable)){
                 unlink($variable); // delete file
                 header('Location:borrarCancion.php');
            }
            ?>
            </div>
        </div>
    </body>
</html>
