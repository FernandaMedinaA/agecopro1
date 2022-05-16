<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];
    include "conexion.php";
    $todos= "SELECT * FROM logos WHERE usuario = '$usuario'";
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
    include "cabecera_empresa.php";
?>
<div id="cuerpo2">
    <div id="userbd">
        <h2>Este es tu perfil empresarial, <?php echo $usuario ?></h2>
    </div><hr id="linea_amarilla">
    <div id="apartado1">
        <br>
        <h3>Logo</h3><br>
        <img src="imagenes/usuario.png" alt=""><br><br>
        <hr>
        <br>
        <?php
            $verificar_fotobd = mysqli_query($conectar,$todos);
            if( mysqli_num_rows($verificar_fotobd) > 0 ){
                echo '<form action="validar_imagen_empresa.php?dirreccion='; echo $row['logo']; echo'" method="post" enctype="multipart/form-data">';
            }else{
                echo '<form action="validar_imagen_empresa.php" method="post" enctype="multipart/form-data">';
            }
        ?>
            <input id="file2" type="file" name="imagen"><br><br>
            <input type="submit" id="guardarfoto" value="Guardar">
        </form>
        <br><br>
        <a id="elim" href="perfil.php"><span>Cancelar</span></a>
    </div>
    <div id="apartado2">
        <h2>Información general</h2>
        <h4>*Se perdera toda informacion previa si no se rellenan todos los campos en caso de querer sobreescribir*</h4><hr>
        <p>Aquí podrás administrar toda la información relacionada
            con tu perfil general como nombres, apellidos, correos y
            números telefonicos.</p>
        <div id="info">
        <form name="contenedor_form" action="validar_info_empresa.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre Empresa" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="tel" name="telefono" placeholder="Telefono" required><br>
            <textarea name="comentario" id="experiencia" placeholder="Descripcion" required></textarea><br>
            <input type="submit" value="Guardar información" id="guardar">
        </form>
        </div>
        <div id="espaciado"></div>
    </div>
</div>
<?php
    include "footer.php";
?>
</body>
</html>