<?php
    require "conexion.php";
    $id = $_GET['id'];
    $nombre = $_GET['name'];

    $eliminar_usuario = "DELETE FROM usuarios WHERE id = '$id'";
    $eliminar_info = "DELETE FROM informacion WHERE usuario = '$nombre'";
    $eliminar_portafolio = "DELETE FROM portafolio WHERE usuario = '$nombre'";
    $eliminar_perfil = "DELETE FROM perfil WHERE usuario = '$nombre'";
    $eliminar_foto = "DELETE FROM imagenes WHERE usuario = '$nombre'";
    unlink($_GET["dir"]);
    unlink($_GET["dir2"]);

    $resultado = mysqli_query($conectar,$eliminar_usuario);
    $resultado2 = mysqli_query($conectar,$eliminar_info);
    $resultado3 = mysqli_query($conectar,$eliminar_portafolio);
    $resultado4 = mysqli_query($conectar,$eliminar_perfil);
    $resultado5 = mysqli_query($conectar,$eliminar_foto);


    if($resultado && $resultado2 && $resultado3 && $resultado4 && $resultado5){
        header("Location: index.php");
    }else{
        echo "No se pudo Eliminar";
    }
?>