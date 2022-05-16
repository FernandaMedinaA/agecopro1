<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $verificar_infobd = mysqli_query($conectar,"SELECT * FROM contacto WHERE email_empresa = '$usuario'");
    if(mysqli_num_rows($verificar_infobd) > 0 ){
        $delete_info = "DELETE FROM contacto WHERE email_empresa = '$usuario'";
        $outcome = mysqli_query($conectar,$delete_info);
        if($outcome){
            $empresa = $_POST['nombre'];
            $email = $_POST['email'];
            $tel = $_POST['telefono'];
            $descripcion = $_POST['comentario'];

            $insertar = "INSERT INTO contacto (nombre_empresa,email_empresa,celular_empresa,comentarios_empresa) VALUES ('$empresa','$email','$tel','$descripcion')";

            $query = mysqli_query($conectar,$insertar);

            if($query){
                echo '
                    <script>
                        alert("SE SOBREESCRIBIERON LOS DATOS CORRECTAMENTE")
                        location.href="perfil_empresa.php"
                    </script> 
                ';
            }else{
                echo '
                    <script>
                        alert("NO SE PUDIERON SOBREESCRIBIR LOS DATOS")
                        location.href="perfil_empresa.php"
                    </script> 
                ';
            }
        }else{
            echo "No se pudo Eliminar";
        }
    }else{
        $empresa = $_POST['nombre'];
        $email = $_POST['email'];
        $tel = $_POST['telefono'];
        $descripcion = $_POST['comentario'];

        $insertar = "INSERT INTO contacto (nombre_empresa,email_empresa,celular_empresa,comentarios_empresa) VALUES ('$empresa','$email','$tel','$descripcion')";

        $query = mysqli_query($conectar,$insertar);

        if($query){
            echo '
                <script>
                    alert("SE GUARDARON LOS DATOS CORRECTAMENTE")
                    location.href="perfil_empresa.php"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDIERON GUARDAR LOS DATOS")
                    location.href="perfil_empresa.php"
                </script> 
            ';
        }
    }

?>