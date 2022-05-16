<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <div id="fondo">
        <div id="derecha">
            <img src="imagenes/LogoExtendido.png" alt="">
            <div id="derechatxt">
                <h1>LIDERES EN CREACION DE EMPLEOS</h1>
            </div>
        </div>
        <div id="izquierda">
            <div id="logo2">
                <img src="imagenes/logo2.png" alt="">
            </div>
            <div id="linea2"></div>
            <div id="textoregistro">
                <p>Registro de nuevo <br> usuario</p>
            </div>
            <div id="textoregistro2">
                <p>Lleva al siguiente nivel tus habilidades <br>
                profesionales.</p>
            </div>
            <div id="textoregistro3">
                <p>Forma parte de nuestros agentes en <br>
                Agecopro.</p>
            </div>
            <br>
            <div id="formRegistro">
                <form action="guardar.php" method="post">
                    <input type="text" name="email" placeholder="Ingresa un Email" required>
                    <br>
                    <input type="password" name="pass" placeholder="Contraseña (5 o más caracteres)" required>
                    <p>Al hacer clic en “Unirse”, aceptas las <br>
                    <a href="" class="azul">Condiciones de uso</a>, la <a href="" class="azul">Política de privacidad</a><br>
                    y la <a href="" class="azul">Política de cookies</a> de Agecopro.</p>
                    <input type="submit" value="Unirse">
                </form>
            </div>
            <a href="index.php" id="return">Volver al inicio</a>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>