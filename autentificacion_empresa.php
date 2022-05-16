<?php
require "conexion.php";

$email_empresa = $_POST['email_empresa'];
$contrasenia_empresa = $_POST['pass_empresa'];
$comparar = "SELECT * FROM agentes WHERE email_empresa = '$email_empresa' AND pass_empresa = '$contrasenia_empresa'";

$resultado = mysqli_query($conectar,$comparar);

if(mysqli_num_rows($resultado) > 0){
	session_start();
	$_SESSION['username'] = $email_empresa;
	$_SESSION["autentificado"] = "SI";
	header("Location: principal_empresa.php");
}else{
	echo '
        <script>
            alert("ERROR EN LA AUTENTIFICACION");
            location.href="login_empresa.php?errorusuario=SI";
        </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conectar);
?>