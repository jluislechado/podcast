<!DOCTYPE html>
<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

$usuario=$sesion->get("usuario");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario Subir</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"/>
    </head>
    <body>
        <div id="cuerpo">
            <div id="cabecera"></div>
            <div id="formulario">
            <div id="formulariIzq">
                <form action="subir.php" method="post" enctype="multipart/form-data">
                    <div id="cat">
                        <div id="tipoCategoria"><span>Selecciona una categoría:</span></div>
                        <div id="selectCategoria">
                            <select name="categoria" size="4">
                                <option value="rock">rock</option>
                                <option value="pop">pop</option>
                                <option value="jazz">jazz</option>
                                <option value="flamenco">flamenco</option>
                                <option value="bandaSonora">Bandas sonoras</option>
                            </select>
                        </div>
                    </div>
                    <div id="privad">
                        <div id="tipoPrivacidad"><span>Indique si desea compartir este podcast:</span></div>
                        <div id="tipoPrivacidad1">
                            <input type="radio" name="privacidad" value="privado"/><span>privado</span>
                            <input type="radio" name="privacidad" value="publico"/><span>público</span>
                        </div>
                    </div>
                    <div id="subir">
                        <input type="file" name="archivo" />
                        <input type="submit" />
                    </div>
                </form>
            </div>
            <div id="formularioDerecha2"></div>    
            </div>
        </div>
    </body>
</html>
