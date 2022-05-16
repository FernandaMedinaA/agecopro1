<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];
    include "conexion.php";
    $todos= "SELECT * FROM imagenes WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conectar, $todos);
    $row = mysqli_fetch_assoc($resultado);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
<?php
    include "cabecera.php";
?>
<div class="responsive">
    <div id="userbd">
        <h2>Bienvenido a tu perfil, <?php echo $usuario ?></h2>
    </div><hr id="linea_azul">
    <div id="apartado1">
        <br>
        <h3>Mi Foto</h3><br>
        <img src="imagenes/usuario.png" alt=""><br><br>
        <hr>
        <br>
        <?php
            $verificar_fotobd = mysqli_query($conectar,$todos);
            if( mysqli_num_rows($verificar_fotobd) > 0 ){
                echo '<form action="validar_imagen.php?dirreccion='; echo $row['fotoperfil']; echo'" method="post" enctype="multipart/form-data">';
            }else{
                echo '<form action="validar_imagen.php" method="post" enctype="multipart/form-data">';
            }
        ?>
            <input id="file1" type="file" name="imagen"><br><br>
            <input type="submit" id="guardarfoto" value="Guardar">
        </form>
        <br><br>
        <a id="elim" href="perfil.php"><span>Cancelar</span></a>
    </div>
    <div id="apartado2">
        <h2>Información general</h2>
        <h4>*Se perdera toda informacion previa si no se rellenan todos los campos en caso de querer sobreescribir*</h4>
        <hr id="linea_blanca">
        <p>Aquí podrás administrar toda la información relacionada
            con tu perfil general como nombres, apellidos, correos y
            números telefonicos.</p>
        <div id="info">
        <form name="contenedor_form" action="validar_info.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombreusuario" placeholder="Nombre(s)" required>
            <input type="text" name="apellidousuario" placeholder="Apellido(s)" required><br>
            <input type="email" name="correousuario" placeholder="Correo electronico" required>
            <input type="email" name="correo2usuario" placeholder="Correo de recuperación" required><br>
            <input type="cel" name="numerousuario" placeholder="Numero telefonico" required><br>
        <div id="ap_redes">
            <h2>Redes sociales</h2>
            <hr id="linea_blanca">
            <p>Introduce los enlaces a tus redes sociales para que los demas puedan verlas.</p>
            <img src="imagenes/facebook1.png" alt=""><input type="url" name="facebook" type="url" placeholder="Escriba aqui...">
            <img src="imagenes/instagram1.png" alt=""><input type="url" name="insta" placeholder="Escriba aqui...">
            <img src="imagenes/twitter1.png" alt=""><input type="url" name="twitter" placeholder="Escriba aqui...">
        </div>
        <br><input type="submit" value="Guardar información" id="guardar">
        </form>
        </div><br><br>
        <div id="perfil">
            <h2>Perfil profesional</h2><hr>
            <p>Registra cuales son tus habilidades y conocimientos.</p>
            <form name="contenedor_form1" action="validar_perfil.php" method="post" enctype="multipart/form-data">
            <div id="preguntas">
                <label for="">Estudié:</label><br>
                <label for="">Resido</label><br>
                <label for="">Mi area:</label><br>
                <label for="">Experiencia</label><br>
            </div>
            <div id="respuestas">
                <select name="universidad" required><option value="tnm" selected>Tecnológico Nacional de México</option><option value="autonoma">Universidad autónoma</option></select><br>
                <select name="residencia" required><option value="merida" selected>Mérida</option></select><br>
                <select name="area" required><option value="Web" selected>Desarrollo web</option><option value="Soporte">Soporte técnico</option><option value="Telecomunicaciones">Telecomunicaciones</option><option value="Programacion">Programación</option></select><br>
                <textarea name="comentario" id="experiencia" required></textarea>
                <input type="submit" value="Guardar información" id="guardar1">
            </div>
            </form>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
</body>
</html>