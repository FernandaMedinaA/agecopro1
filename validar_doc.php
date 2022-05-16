<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $rutatemporal = $_FILES['documento']['tmp_name'];
    $rutaservidor = 'portafolios';
    $nombrearchivo = $_FILES['documento']['name'];
    $rutadestino = $rutaservidor."/".$nombrearchivo;
    move_uploaded_file ($rutatemporal,$rutadestino);

    $insertar = "INSERT INTO portafolio (usuario,nombredoc,documento) VALUES ('$usuario','$nombrearchivo','$rutadestino')";

    $query = mysqli_query($conectar,$insertar);

    if($query){
        echo '
            <script>
                alert("SE GUARDO TU ARCHIVO CORRECTAMENTE")
                location.href="portafolio.php"
            </script> 
        ';
    }else{
        echo '
            <script>
                alert("NO SE PUDO GUARDAR EL ARCHIVO")
                location.href="portafolio.php"
            </script> 
        ';
    }
    ?>