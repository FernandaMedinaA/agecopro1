<?php
    require "conexion.php";
    $id = $_GET['id'];

    $eliminar = "DELETE FROM portafolio WHERE id = '$id'";
    $resultado = mysqli_query($conectar,$eliminar);
    unlink($_GET["name"]);

    if($resultado){
        header("Location: ver_portafolio.php");
    }else{
        echo "No se pudo Eliminar";
    }
?>