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
    <table>
        <th>Nombre</th>
        <th>Descargar</th>
        <th>Eliminar</th>
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM portafolio WHERE usuario = '$usuario'";
            $resultado = mysqli_query($conectar, $todos);
            while ($row = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo $row["nombredoc"];?></td>
            <td><a href="<?php echo $row["documento"];?>" download="<?php echo $row["nombredoc"];?>"><img src="imagenes/descargar.png" alt=""></a></td>
            <td><a href="#" onClick="validar('eliminardoc.php?id=<?php echo $row["id"];?>&name=<?php echo $row["documento"];?>')"><img src="imagenes/eliminar.png" alt=""></a></td>
        </tr>
        <script>
            function validar(url){
            var eliminar = confirm("¿Realmente deseas eliminar este archivo?");
            if(eliminar == true){
                window.location=url;
            }
            }  
        </script>
        <?php 
            }
            mysqli_free_result($resultado);
        ?>
    </table><br><br>
    </div>
    <!--<div id="portafolio2">
        <div id="video">
            <video src="imagenes/video1.mp4" autoplay muted></video>
        </div>
    </div>-->
    <a id="boton_verport" href="portafolio.php">Subir un nuevo archivo</a><br>
</div>
<?php
    include "footer.php";
?>
</body>
</html>