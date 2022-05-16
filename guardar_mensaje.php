<?php
    require "conexion.php";
    require "seguridad_empresa.php";
    $mensaje = $_POST['mensaje'];

    $insertar = "INSERT INTO solicitudes_empresa (mensaje) VALUES ('$mensaje')";

    $query = mysqli_query($conectar,$insertar);

    if($query){
        echo '
            <script>
                alert("Listo!")
                location.href="proyectos_empresa.php"
            </script> 
        ';
    }else{
        echo '
            <script>
                alert("Ups! Intenta de nuevo.")
                location.href="proyectos_empresa.php"
            </script> 
        ';
    }

?>