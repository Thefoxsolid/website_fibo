<?php
session_start();
include("funciones.php")
$config = obtenerConfiguracion();
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Fibonacci - Login</title>
</head>
<body>
    <div id="contenedor-login">
        <div class="presentacion">
            <div class="titulo">
                <h1>fibonacci</h1>
                <p>Sistema de Administración Inmobiliaria</p>
                <div class="contenedor-formulario">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-login">
                        <p>Iniciar Sesión como<strong>Administrador</strong></p>
                        <input type="text" placeholder="Nombre del Usuario" name="usuario" require
                        class="input-login">
                        <input type="password" placeholder="Contraseña" name="password" require
                        class="input-login">
                        <input type="submit" value="Iniciar Sesión" name="iniciar" class="btn">
                    </form>

                </div>
            </div>

        </div>
    </div>
</body>
</html>