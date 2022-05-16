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
<body>
<?php
    include "cabecera.php";
?>
<div class="responsive">
    <div class="seccion_port">
        <div class="seccion">
            <img src="imagenes/area.png" alt="">
            <h2>4</h2>
            <p>Áreas de desarrollo multidisciplinarias</p>
        </div>
        <div class="seccion">
            <img src="imagenes/empresa.png" alt="">
            <h2>20</h2>
            <p>Empresas reconocidas esperando por reclutarte</p>
        </div>
        <div class="seccion">
            <img src="imagenes/vacante.png" alt="">
            <h2>+100</h2>
            <p>Vacantes discponibles</p>
        </div>
    </div><hr id="linea_azul">
    <div id="portafolio">
        <div id="subportafolio">
        <h2>¿Listo para subir tus creaciones?</h2>
        <p id="portafoliop">Empecemos</p><br>
        <p id="portafoliop2">Nosotros te ofrecemos una gran versatilidad a la hora de subir tus trabajos.
            Queremos convertirnos en un portal donde tus trabajos tengan un lugar
            seguro y que puedan ser vistos por empresas altamente reconocidas en la localidad, de este modo,
            puedes demostrar cuales son tus habilidades y conocimientos.  </p><br>
        <form name="contenedor_form" action="validar_doc.php" method="post" enctype="multipart/form-data">
            <input id="file" type="file" name="documento">
            <input type="submit" value="Cargar" id="enviar1"><br><br>
        </form>
        <a id="btn_portafolio" href="ver_portafolio.php">Ver mis archivos subidos</a>
        </div>
    </div>
    <div id="portafolio2">
        <div id="video">
            <video src="imagenes/video1.mp4" autoplay muted></video>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
</body>
</html>