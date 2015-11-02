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
                <div id="listarIzq2">
                    <div class="listadoU"><span>Listado de usuarios</span></div>
                        <?php
                        echo Metodos::listarUsuarios();
                        $variable=Request::get('nombre');
                        ?>
                </div>
                <div id="listarDerecha2">
                    <div class="listadoU"><span><?php echo 'Canciones subidas por '.$variable?></span></div>
                    <ul>
                        <?php
                        echo Metodos::listar($variable, "rock", "publico");
                        echo Metodos::listar($variable, "pop", "publico");
                        echo Metodos::listar($variable, "jazz", "publico");
                        echo Metodos::listar($variable, "flamenco", "publico");
                        echo Metodos::listar($variable, "bandaSonora", "publico");
                        $cancion=  Request::get('src');
                        ?>
                    </ul>
                </div>
                <div id="radio2">
                    <audio src="<?php echo $cancion?>" controls autoplay/>
                </div>
                <div id="volver2">
                    <a href="usuario.php">Volver a página principal</a>
                </div>
            </div>
        </div>
    </body>
</html>
