<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $verificar_infobd = mysqli_query($conectar,"SELECT * FROM informacion WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_infobd) > 0 ){
        $delete_info = "DELETE FROM informacion WHERE usuario = '$usuario'";
        $outcome = mysqli_query($conectar,$delete_info);
        if($outcome){
            $nombre = $_POST['nombreusuario'];
            $apellido = $_POST['apellidousuario'];
            $correo = $_POST['correousuario'];
            $correo2 = $_POST['correo2usuario'];
            $numero = $_POST['numerousuario'];
            $facebook = $_POST['facebook'];
            $insta = $_POST['insta'];
            $twitter = $_POST['twitter'];

            $insertar = "INSERT INTO informacion (usuario,nombreusuario,apellidousuario,correousuario,correo2usuario,numerousuario,facebook,insta,twitter) VALUES ('$usuario','$nombre','$apellido','$correo','$correo2','$numero','$facebook','$insta','$twitter')";

            $query = mysqli_query($conectar,$insertar);

            if($query){
                echo '
                    <script>
                        alert("SE SOBREESCRIBIERON LOS DATOS CORRECTAMENTE")
                        location.href="perfil.php"
                    </script> 
                ';
            }else{
                echo '
                    <script>
                        alert("NO SE PUDIERON SOBREESCRIBIR LOS DATOS")
                        location.href="perfil.php"
                    </script> 
                ';
            }
        }else{
            echo "No se pudo Eliminar";
        }
    }else{
        $nombre = $_POST['nombreusuario'];
        $apellido = $_POST['apellidousuario'];
        $correo = $_POST['correousuario'];
        $correo2 = $_POST['correo2usuario'];
        $numero = $_POST['numerousuario'];
        $facebook = $_POST['facebook'];
        $insta = $_POST['insta'];
        $twitter = $_POST['twitter'];

        $insertar = "INSERT INTO informacion (usuario,nombreusuario,apellidousuario,correousuario,correo2usuario,numerousuario,facebook,insta,twitter) VALUES ('$usuario','$nombre','$apellido','$correo','$correo2','$numero','$facebook','$insta','$twitter')";

        $query = mysqli_query($conectar,$insertar);

        if($query){
            echo '
                <script>
                    alert("SE GUARDARON LOS DATOS CORRECTAMENTE")
                    location.href="perfil.php"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDIERON GUARDAR LOS DATOS")
                    location.href="perfil.php"
                </script> 
            ';
        }
    }

?>