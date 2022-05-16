<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad_empresa.php"; 
    $usuario = $_SESSION['username'] 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<?php
        include "cabecera_empresa.php";
?>
<body>
<div class="responsive">
    <div id="cuerpo2">
        <div id="imagen">
            <div id="texto_empresa">
            <h2>Conoce a los futuros profesionistas registrados.</h2><br><br>
            <div id="botoncito">
                <a href="catalogo_empresa.php">Ir al catalogo</a>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>