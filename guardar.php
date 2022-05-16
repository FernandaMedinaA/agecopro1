<?php
    require "conexion.php";

    $email = $_POST['email'];
    $contra = $_POST['pass'];

    $insertar = "INSERT INTO usuarios (email,pass) VALUES ('$email','$contra')";

    $verficar_usuario = mysqli_query($conectar , "SELECT * FROM usuarios WHERE email = '$email' ");
    if( mysqli_num_rows($verficar_usuario) > 0 ){
        echo '
            <script>
                alert("ESTE USUARIO YA ESTA REGISTRADO");
                location.href="registrarse.php";
            </script>
        ';
        exit;
    }

    $query = mysqli_query($conectar,$insertar);

    if($query){
        echo '
            <script>
                alert("SE GUARDARON LOS DATOS CORRECTAMENTE")
                location.href="index.php"
            </script> 
        ';
    }else{
        echo '
            <script>
                alert("NO SE PUDIERON GUARDAR LOS DATOS")
                location.href="index.php"
            </script> 
        ';
    }

?>