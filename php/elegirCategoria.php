<!DOCTYPE html>

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
                <div id="listarIzq">
                </br>    
                <div id="titulo"><span>Elige la categoría deseada</span></div>
                 
                <form method="post" action="listar.php">
                        </br><input type="radio" name="categoria" value="rock"/><span>rock</span>
                        </br><input type="radio" name="categoria" value="pop"/><span>pop</span>
                        </br><input type="radio" name="categoria" value="jazz"/><span>jazz</span>
                        </br><input type="radio" name="categoria" value="flamenco"/><span>flamenco</span>
                        </br><input type="radio" name="categoria" value="banda"/><span>banda sonora</span>
                        </br><input type="radio" name="categoria" value="todas" checked="checked"/><span>todas</span>
                        </br><input type="submit" value="Listar podcasts" id="botonListar"/>
                </form>
                </div>
                <div id="formularioDerecha2"></div>
                <div id="volver">
                    <a href="usuario.php">Volver</a>
                </div>
            </div>
        </div>
    </body>
</html>
