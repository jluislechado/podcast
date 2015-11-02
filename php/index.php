<!DOCTYPE html>

<?php
    require '../clases/AutoCarga.php';
//    $sesion=new Session();
?>    

<html>
    <head>
        <meta charset="UTF-8">
        <title>Podcasting Principal</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"/>
    </head>
    <body>
        <div id="fondo">
            
            <div id="cuerpo">
                <div id="cabecera"></div>
                <div id="formulario">
                <form method="post" action="phplogin.php">
                
                    <div id="capaUsuario">
            
                        <span>Usuario:&nbsp;&nbsp;</span>
                        <input type="text" placeholder="usuario" name="usuario"/>
            
                    </div>
                    <div id="capaContrasena">
                
                        <span>Contrasena:&nbsp;&nbsp;</span>
                        <input type="password" placeholder="contrasena" name="contrasena"/>
                
                    </div>
                
                <!--<div id="administrador">
                
                    <input type="checkbox"/><span>&nbsp;&nbsp;Entrar como administrador</span>
                
                </div>--><!-- Código que prevee el acceso del administrador de forma distinta-->
                
                    <div id="entrar">

                        <input type="submit" value="Entrar" id="botonEntrar"/>
                
                    </div>
                
                <!--<div id="registro">
                    <a href="registro.html"><span>No estoy registrado</span></a>
                </div>
                
                <div id="triangulo"></div>-->
                
                </form>
                </div>
            </div>    
            
        </div>
    </body>
</html>
