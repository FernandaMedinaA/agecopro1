<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $verificar_perfilbd = mysqli_query($conectar,"SELECT * FROM perfil WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_perfilbd) > 0 ){
        $delete_perfil = "DELETE FROM perfil WHERE usuario = '$usuario'";
        $outcome = mysqli_query($conectar,$delete_perfil);
        if($outcome){
            $universidad = $_POST['universidad'];
            $residencia = $_POST['residencia'];
            $area = $_POST['area'];
            $comentario = $_POST['comentario'];

            $insertar = "INSERT INTO perfil (usuario,universidad,residencia,area,comentario) VALUES ('$usuario','$universidad','$residencia','$area','$comentario')";

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
        $universidad = $_POST['universidad'];
        $residencia = $_POST['residencia'];
        $area = $_POST['area'];
        $comentario = $_POST['comentario'];

        $insertar = "INSERT INTO perfil (usuario,universidad,residencia,area,comentario) VALUES ('$usuario','$universidad','$residencia','$area','$comentario')";

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