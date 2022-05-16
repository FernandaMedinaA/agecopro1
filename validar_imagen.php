<?php
    require "conexion.php";
    require "seguridad.php"; 
    $usuario = $_SESSION['username'];

    $verificar_foto = mysqli_query($conectar,"SELECT * FROM imagenes WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_foto) > 0 ){
        $delete_photo = "DELETE FROM imagenes WHERE usuario = '$usuario'";
        $outcome = mysqli_query($conectar,$delete_photo);
        if($outcome){
            $rutatemporal = $_FILES['imagen']['tmp_name'];
            $rutaservidor = 'imgperfil';
            $nombrefoto = $_FILES['imagen']['name'];
            $rutadestino = $rutaservidor."/".$nombrefoto;
            move_uploaded_file ($rutatemporal,$rutadestino);

            $insertar = "INSERT INTO imagenes (usuario,fotoperfil) VALUES ('$usuario','$rutadestino')";

            $query = mysqli_query($conectar,$insertar);

            if($query){
                echo '
                    <script>
                        alert("SE SOBREESCRIBIO LA FOTO CORRECTAMENTE")
                        location.href="perfil.php"
                    </script> 
                ';
            }else{
                echo '
                    <script>
                        alert("NO SE PUDO SOBREESCRIBIR LA FOTO")
                        location.href="perfil.php"
                    </script> 
                ';
            }
        }else{
            echo "No se pudo Eliminar";
        }
        unlink($_GET["dirreccion"]);
    }else{
        $rutatemporal = $_FILES['imagen']['tmp_name'];
        $rutaservidor = 'imgperfil';
        $nombrefoto = $_FILES['imagen']['name'];
        $rutadestino = $rutaservidor."/".$nombrefoto;
        move_uploaded_file ($rutatemporal,$rutadestino);

        $insertar = "INSERT INTO imagenes (usuario,fotoperfil) VALUES ('$usuario','$rutadestino')";

        $query = mysqli_query($conectar,$insertar);

        if($query){
            echo '
                <script>
                    alert("SE GUARDO LA FOTO CORRECTAMENTE")
                    location.href="perfil.php"
                </script> 
            ';
        }else{
            echo '
                <script>
                    alert("NO SE PUDO GUARDAR LA FOTO")
                    location.href="perfil.php"
                </script> 
            ';
        }
    }
    ?>