<?php
require "conexion.php";

$email = $_POST['email'];
$contrasenia = $_POST['pass'];
$comparar = "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$contrasenia'";

$resultado = mysqli_query($conectar,$comparar);

if(mysqli_num_rows($resultado) > 0){
	session_start();
	$_SESSION['username'] = $email;
	$_SESSION["autentificado"] = "SI";
	header("Location: principal_usuario.php");
}else{
	echo '
        <script>
            alert("ERROR EN LA AUTENTIFICACION");
            location.href="login.php?errorusuario=SI";
        </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conectar);
?>