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
    include "cabecera.php";
?>
<body>
<div class="responsive">
    <div id="userbd">
        <h2>Bienvenido a tu perfil, <?php echo $usuario ?></h2>
    </div><hr id="linea_azul">
    <div id="apartado1">
        <br>
        <h3>Mi Foto</h3><br>
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM imagenes WHERE usuario = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            $row = mysqli_fetch_assoc($resultado);

            $verificar_img = mysqli_query($conectar , "SELECT * FROM imagenes WHERE usuario = '$usuario' ");
            if( mysqli_num_rows($verificar_img) > 0 ){
                echo '<img src="'; echo $row['fotoperfil']; echo'" alt=""><br><br>';
            }else{
                echo '<img src="imagenes/usuario.png" alt=""><br><br>';
            }
        ?>
        <hr>
        <br>
        <a href="editarperfil.php">Editar perfil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
        <a href="#apartado2">Información general &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
        <a href="#perfil">Perfil profesional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM usuarios WHERE email = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            $row = mysqli_fetch_assoc($resultado);

            $todos2= "SELECT * FROM portafolio WHERE usuario = '$usuario'";
            $resultado2 = mysqli_query($conectar, $todos2);
            $row2 = mysqli_fetch_assoc($resultado2);

            $todos3= "SELECT * FROM imagenes WHERE usuario = '$usuario'";
            $resultado3 = mysqli_query($conectar, $todos3);
            $row3 = mysqli_fetch_assoc($resultado3);

            if( mysqli_num_rows($verificar_img) > 0 ){
                $verificar_porta = mysqli_query($conectar , "SELECT * FROM portafolio WHERE usuario = '$usuario' ");
                if(mysqli_num_rows($verificar_porta) > 0 ){
                    ?>
                    <a href="#" onClick="validar('eliminarusuario.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["email"];?>&dir2=<?php echo $row3["fotoperfil"];?>&dir=<?php echo $row2["documento"];?>')"><span id="elim">Eliminar Cuenta</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <?php
                }else{
                    ?>
                    <a href="#" onClick="validar('eliminarusuario.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["email"];?>&dir2=<?php echo $row3["fotoperfil"];?>')"><span id="elim">Eliminar Cuenta</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <?php
                }
            }else{
                $verificar_porta = mysqli_query($conectar , "SELECT * FROM portafolio WHERE usuario = '$usuario' ");
                if(mysqli_num_rows($verificar_porta) > 0 ){
                    ?>
                    <a href="#" onClick="validar('eliminarusuario.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["email"];?>&dir=<?php echo $row2["documento"];?>')"><span id="elim">Eliminar Cuenta</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <?php
                }else{
                    ?>
                    <a href="#" onClick="validar('eliminarusuario.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["email"];?>')"><span id="elim">Eliminar Cuenta</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <?php
                }
            }
            mysqli_free_result($resultado);
            mysqli_free_result($resultado2);
            mysqli_free_result($resultado3);
        ?>
        <script>
            function validar(url){
            var eliminar = confirm("¿Realmente deseas eliminar tu cuenta?");
            if(eliminar == true){
                window.location=url;
            }
            }
        </script>
    </div>
    <div id="apartado2">
        <h2>Información general</h2>
        <hr id="linea_blanca1">
        <p>Aquí podrás ver toda la información relacionada
            con tu perfil general como nombres, apellidos, correos y
            números telefonicos.</p>
        <div id="info">
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM informacion WHERE usuario = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            $row = mysqli_fetch_assoc($resultado);

            $verificar_info = mysqli_query($conectar , "SELECT * FROM informacion WHERE usuario = '$usuario' ");
            if( mysqli_num_rows($verificar_info) > 0 ){
                echo '<form name="contenedor_form" action="validar_info.php" method="post" enctype="multipart/form-data">
                <input type="text" name="nombreusuario" placeholder="'; echo $row["nombreusuario"]; echo'" readonly >
                <input type="text" name="apellidousuario" placeholder="'; echo $row["apellidousuario"]; echo'" readonly><br>
                <input type="email" name="correousuario" placeholder="'; echo $row["correousuario"]; echo'" readonly>
                <input type="email" name="correo2usuario" placeholder="'; echo $row["correo2usuario"]; echo'" readonly><br>
                <input type="cel" name="numerousuario" placeholder="'; echo $row["numerousuario"]; echo'" readonly><br><br>

                <div id="ap_redes">
                <h2>Redes sociales</h2>
                <p>Estos enlaces a tus redes sociales son para que todos los demas puedan verlas.</p>
                <img src="imagenes/facebook1.png" alt=""><input id="input_red" type="url" name="facebook" type="url" placeholder="'; echo $row["facebook"]; echo'" readonly>
                <img src="imagenes/instagram1.png" alt=""><input id="input_red" type="url" name="insta" placeholder="'; echo $row["insta"]; echo'" readonly>
                <img src="imagenes/twitter1.png" alt=""><input id="input_red" type="url" name="twitter" placeholder="'; echo $row["twitter"]; echo'" readonly>
                </div>
                </form>';
            }else{
                echo '<form name="contenedor_form" action="validar_info.php" method="post" enctype="multipart/form-data">
                <input type="text" name="nombreusuario" placeholder="Nombre" readonly >
                <input type="text" name="apellidousuario" placeholder="Apellido" readonly><br>
                <input type="email" name="correousuario" placeholder="Correo electronico" readonly>
                <input type="email" name="correo2usuario" placeholder="Correo de recuperación" readonly><br>
                <input type="cel" name="numerousuario" placeholder="Numero telefonico" readonly><br>
                <div id="ap_redes">
                <h2>Redes sociales</h2>
                <p>Estos enlaces a tus redes sociales son para que todos los demas puedan verlas.</p>
                <img src="imagenes/facebook1.png" alt=""><input id="input_red" type="url" name="facebook" type="url" placeholder="Facebook" readonly>
                <img src="imagenes/instagram1.png" alt=""><input id="input_red" type="url" name="insta" placeholder="Instagram" readonly>
                <img src="imagenes/twitter1.png" alt=""><input id="input_red" type="url" name="twitter" placeholder="Twitter" readonly>
                </div>
                </form>';
            }
        ?>
        </div><br><br><br>
        <div id="perfil">
            <h2>Perfil profesional</h2>
            <hr id="linea_blanca1">
            <p>Aqui se muestran cuales son tus habilidades y conocimientos.</p>
            <form name="contenedor_form1" action="validar_perfil.php" method="post" enctype="multipart/form-data">
            <div id="preguntas2">
                <label for="">Estudié: </label><br>
                <label for="">Resido: </label><br>
                <label for="">Mi area: </label><br>
                <label for="">Referencias: </label><br>
            </div>
            <div id="respuestas">
                <?php
                include "conexion.php";
                $todos= "SELECT * FROM perfil WHERE usuario = '$usuario'";
                $resultado = mysqli_query($conectar, $todos);
                $row = mysqli_fetch_assoc($resultado);

                $verificar_perfil = mysqli_query($conectar , "SELECT * FROM perfil WHERE usuario = '$usuario' ");
                if( mysqli_num_rows($verificar_perfil) > 0 ){
                    echo '<form name="contenedor_form" action="" method="">
                    <input type="text" name="" placeholder="'; echo $row["universidad"]; echo'" readonly > <br>
                    <input type="text" name="" placeholder="'; echo $row["residencia"]; echo'" readonly><br>
                    <input type="text" name="" placeholder="'; echo $row["area"]; echo'" readonly> <br>
                    <input type="text" name="" placeholder="'; echo $row["comentario"]; echo'" readonly><br>
                    </form>';
                }else{
                    echo '<form name="contenedor_form" action="" method="">
                    <input type="text" name="" placeholder="Universidad" readonly ><br>
                    <input type="text" name="" placeholder="Residencia" readonly><br>
                    <input type="text" name="" placeholder="Area" readonly><br>
                    <input type="text" name="" placeholder="Comentario" readonly><br>
                    </form>';
                    }
                ?>
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