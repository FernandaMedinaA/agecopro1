<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
<div class="responsive">
    <div id="fondo3">
        <div id="derecha">
            <img src="imagenes/LogoExtendido.png" alt="">
            <div id="derechatxt">
                <h1>MEJORES IDEAS POR MENTES JOVENES</h1>
            </div>
        </div>
        <div id="izquierda">
            <div id="logo2">
                <img src="imagenes/logo2.png" alt="">
            </div>
            <div id="linea2"></div>
            <div id="textoregistro">
                <p>Inicia sesion <br>como empresa</p>
            </div>
            <div id="textoregistro2">
                <p>Agecopro es tu socio de confianza.</p>
            </div>
            <div id="textoregistro3">
                <p>Ingresa tus datos de acceso a continuacion para explorar las ideas<br>
                de cientos de mentes creativas.</p>
            </div>
            <br>
            <div id="formRegistro">
                <form action="autentificacion_empresa.php" method="post">
                    <input type="text" name="email_empresa" placeholder="Email" required>
                    <br>
                    <input type="password" name="pass_empresa" placeholder="Contraseña" required>
                    <input type="submit" value="Iniciar sesion">
                </form>
            </div>
            <a href="index.php" id="return">Volver al inicio</a><br>
            <a href="contactanos.php" id="sincuenta">¿No tienes cuenta? Registrate.</a>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>