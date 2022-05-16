<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $verificar_foto = mysqli_query($conectar,"SELECT * FROM logos WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_foto) > 0 ){
        $delete_photo = "DELETE FROM logos WHERE usuario = '$usuario'";
        $outcome = mysqli_query($conectar,$delete_photo);
        if($outcome){
            $rutatemporal = $_FILES['imagen']['tmp_name'];
            $rutaservidor = 'imglogos';
            $nombrefoto = $_FILES['imagen']['name'];
            $rutadestino = $rutaservidor."/".$nombrefoto;
            move_uploaded_file ($rutatemporal,$rutadestino);

            $insertar = "INSERT INTO logos (usuario,logo) VALUES ('$usuario','$rutadestino')";

            $query = mysqli_query($conectar,$insertar);

            if($query){
                echo '
                    <script>
                        alert("SE SOBREESCRIBIO EL LOGO CORRECTAMENTE")
                        location.href="perfil_empresa.php"
                    </script> 
                ';
            }else{
                echo '
                    <script>
                        alert("NO SE PUDO SOBREESCRIBIR EL LOGO")
                        location.href="perfil_empresa.php"
                    </script> 
                ';
            }
        }else{
            echo "No se pudo Eliminar";
        }
        unlink($_GET["dirreccion"]);
    }else{
        $rutatemporal = $_FILES['imagen']['tmp_name'];
        $rutaservidor = 'imglogos';
        $nombrefoto = $_FILES['imagen']['name'];
        $rutadestino = $rutaservidor."/".$nombrefoto;
        move_uploaded_file ($rutatemporal,$rutadestino);

        $insertar = "INSERT INTO logos (usuario,logo) VALUES ('$usuario','$rutadestino')";

        $query = mysqli_query($conectar,$insertar);

        if($query){
            echo '
                <script>
                    alert("SE GUARDO EL LOGO CORRECTAMENTE")
                    location.href="perfil_empresa.php"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDO GUARDAR EL LOGO")
                    location.href="perfil_empresa.php"
                </script> 
            ';
        }
    }
    ?>