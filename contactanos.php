<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
<div id="heater">
    <div id="logo">
        <a href="index.php"><img src="imagenes/LogoExtendido.png" alt=""></a>
    </div>
    <div id="linea"></div>
    <div id="redes">
        <a href="https://www.facebook.com/Agecopro-113627904653086" target="blank"><img src="imagenes/facebook.png" alt=""></a>
        <a href="" target="blank"><img src="imagenes/instagram.png" alt=""></a>
        <a href="" target="blank"><img src="imagenes/twitter.png" alt=""></a>
    </div>
    <div id="botones">
        ¿Ya estas afiliado con Agecopro?<a href="login_empresa.php" id="login">Login Empresa</a>
    </div>
</div>
<div id="fondo_contacto">
    <div id="degradado_contacto">
    <div id="titulo_contacto">
        <h3>CONTACTO</h3>
    </div>
    </div>
</div>
<div id="contenido_contacto">
    <h1>¡Haz que tu empresa forme parte de la mejor agencia de colocación profesional!</h1>
    <p id="mensaje_contacto">Gracias por compartir tus datos. Nos pondremos en contacto contigo <br> para tu pronto registro en nuestra plataforma.</p>
    <div class="contenedor">
        <div class="contenedor_nombres">
            <p>Nombre de la empresa :</p>
            <p>E-mail :</p>
            <p>Telefono :</p>
            <p>Informacion adicional :</p><br><br>
        </div>
        <div class="contenedor_elementos">
            <form name="contenedor_form" action="guardar_empresa.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre_empresa" class="campos" required><br>
                <input type="email" name="email_empresa" class="campos" required><br>
                <input type="cel" name="celular_empresa" class="campos" required><br>
                <textarea name="comentarios_empresa" id=""></textarea required><br><br>
                <input type="submit" value="Enviar" id="enviar">
            </form> 
        </div>
    </div>
</div>

</body>
<?php
        include "footer.php";
    ?>
</html>