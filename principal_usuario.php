<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad.php"; 
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
    include "cabecera.php";
?>
<body>
<div class="responsive">
    <div id="imagen">
        <div id="texto">
        <h2>Registrate en los mejores proyectos.</h2><br><br>
        <a href="catalogo_usuario.php">Ir al catalogo</a>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>