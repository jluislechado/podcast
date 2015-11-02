<!DOCTYPE html>
<?php
require '../clases/AutoCarga.php';
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
                <div id="subidos"><span>Web del administrador</span></div>
                <div id="listarIzq">
                    <div class="listadoU"><span>Listado de usuarios</span></div>
                    <?php
                    echo Metodos::listarUsuarios();
                    $variable=Request::get('nombre');
                    ?>
                </div>
                <div id="listarDerecha">
                <div class="listadoU"><span><?php echo 'Canciones subidas por '.$variable?></span></div>
                    <ul>
                    <?php
                        echo Metodos::listar($variable, "rock", "publico");
                        echo Metodos::listar($variable, "pop", "publico");
                        echo Metodos::listar($variable, "jazz", "publico");
                        echo Metodos::listar($variable, "flamenco", "publico");
                        echo Metodos::listar($variable, "bandaSonora", "publico");
                        echo Metodos::listar($variable, "rock", "privado");
                        echo Metodos::listar($variable, "pop", "privado");
                        echo Metodos::listar($variable, "jazz", "privado");
                        echo Metodos::listar($variable, "flamenco", "privado");
                        echo Metodos::listar($variable, "bandaSonora", "privado");
                        $cancion=  Request::get('src');
                    ?>
                    </ul>
                </div>
                <div id="radio2">
                    <audio src="<?php echo $cancion?>" controls autoplay/>
                </div>
                <div id="volver2">
                    <a href="admin.php">Volver a página principal</a>
                </div>
            </div>
        </div>
    </body>
</html>
