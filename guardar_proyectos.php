<?php
    require "conexion.php";
    require "seguridad_empresa.php"; 
    $usuario = $_SESSION['username'];

    $nombre_proyecto = $_POST['nombre_proyecto'];
    $responsable_proyecto = $_POST['responsable_proyecto'];
    $area = $_POST['area'];
    $comentario = $_POST['comentarios_proyecto'];

    $insertar = "INSERT INTO proyectos (usuario,nombre_proyecto,responsable_proyecto,area,comentarios_proyecto) VALUES ('$usuario','$nombre_proyecto','$responsable_proyecto','$area','$comentario')";

    $query = mysqli_query($conectar,$insertar);

    if($query){
        echo '
            <script>
                alert("SE REGISTRO EL PROYECTO CON EXITO")
                location.href="proyectos_empresa.php"
            </script> 
        ';
    }else{
        echo '
            <script>
                alert("NO SE PUDIERON GUARDAR LOS DATOS")
                location.href="proyectos_empresa.php"
            </script> 
        ';
    }

?>