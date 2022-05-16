<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad.php"; 
    $usuario = $_SESSION['username']; 
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
    <div id="userbd1">
        <h2>Este es tu perfil empresarial, <?php echo $usuario ?></h2>
    </div>
    <hr id="linea_amarilla">
    <div id="apartado1">
        <br>
        <h3>Mi Logo</h3><br>
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM logos WHERE usuario = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            $row = mysqli_fetch_assoc($resultado);

            $verificar_img = mysqli_query($conectar , "SELECT * FROM logos WHERE usuario = '$usuario' ");
            if( mysqli_num_rows($verificar_img) > 0 ){
                echo '<img src="'; echo $row['logo']; echo'" alt=""><br><br>';
            }else{
                echo '<img src="imagenes/usuario.png" alt=""><br><br>';
            }
        ?>
        <hr>
        <br>
        <a href="editarperfil_empresa.php">Editar perfil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
        <!--Aqui va el boton de eliminar cuenta de empresa -->
    </div>
    <div id="apartado2">
        <h2>Información general</h2><hr>
        <p>Aquí podrás ver toda la información relacionada
            con tu perfil general como nombres, apellidos, correos y
            números telefonicos.</p>
        <div id="info">
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM contacto WHERE email_empresa = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            $row = mysqli_fetch_assoc($resultado);

            $verificar_contacto = mysqli_query($conectar , "SELECT * FROM contacto WHERE email_empresa = '$usuario' ");
            if( mysqli_num_rows($verificar_contacto) > 0 ){
                echo '<form name="contenedor_form" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="" placeholder="'; echo $row["nombre_empresa"]; echo'" readonly >
                <input type="email" name="" placeholder="'; echo $row["email_empresa"]; echo'" readonly><br>
                <input type="tel" name="" placeholder="'; echo $row["celular_empresa"]; echo'" readonly>
                <input type="text" name="" placeholder="'; echo $row["comentarios_empresa"]; echo'" readonly><br>
                </form>';
            }else{
                echo '<form name="contenedor_form" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="" placeholder="Nombre" readonly >
                <input type="email" name="" placeholder="Email" readonly><br>
                <input type="tel" name="" placeholder="Telefono" readonly>
                <input type="text" name="" placeholder="Comentario" readonly><br>
                </form>';
            }
        ?>
        </div><br><br>
    </div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>