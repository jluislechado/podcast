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
                <?php 
                    $variable=  Request::get('src');
                ?>
                <div id="listarIzq">
                    <div id="margen3"></div>
                <div><audio src="<?php echo $variable; ?>" controls autoplay></audio></div>
                <div id="volver3"><a href="elegirCategoria.php">Volver</a></div>
                </div>
                <div id="formularioDerecha2"></div>
            </div>
            
        </div>
    </body>
</html>
