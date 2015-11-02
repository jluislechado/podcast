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
                <div id="subidos"><span>Podcasts subidos</span></div>
                <div id="listarIzq">
                    <div id="publicos"><span>Podcasts públicos</span></div>
                <ul>
                <?php
                    $categoria=  Request::post('categoria');
                    if($categoria=='todas'){
                        echo Metodos::listar2($usuario, "rock", "publico");
                        echo Metodos::listar2($usuario, "pop", "publico");
                        echo Metodos::listar2($usuario, "jazz", "publico");
                        echo Metodos::listar2($usuario, "flamenco", "publico");
                        echo Metodos::listar2($usuario, "bandaSonora", "publico");
                    }
                    else{
                        echo Metodos::listar2($usuario, $categoria, "publico");
                    }
                ?>
                </ul>
                </div>
                <div id="listarDerecha">
                    <div id="privados"><span>Podcasts privados</span></div>
                <ul>
                <?php
                    if($categoria=='todas'){
                        echo Metodos::listar2($usuario, "rock", "privado");
                        echo Metodos::listar2($usuario, "pop", "privado");
                        echo Metodos::listar2($usuario, "jazz", "privado");
                        echo Metodos::listar2($usuario, "flamenco", "privado");
                        echo Metodos::listar2($usuario, "bandaSonora", "privado");
                    }
                    else{
                        echo Metodos::listar2($usuario, $categoria, "privado");
                    }
//                    $variable=  Request::get('src');
                ?>
                </ul>
                </div>
<!--                <div id="radio">
                    <audio src="<?php echo $variable?>" controls autoplay/>
                </div>-->
                <div id="volver2">
                    <a href="usuario.php">Volver a página principal</a>
                </div>
            </div>
        </div>
    </body>    
</html>
