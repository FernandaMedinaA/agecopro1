<?php
    $id = $_GET['id']; //Baja y se guarda en una variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Información general</title>
</head>
<body>
<div id="contenido_popup">
<H1>Información general</H1><br>
<div id="subcontenido_popup">
    <?php
        include "conexion.php";
        $todos = "SELECT * FROM informacion";
        $resultado = mysqli_query($conectar, $todos);
        while($registro = mysqli_fetch_assoc($resultado))
        {
    ?>
        <h2>Nombre: <span><?php echo $registro['nombreusuario'].$registro['apellidousuario']?></span></h2>
        <h2>Email: <span><?php echo $registro['correousuario']?></span></h2>
        <h2>Número de contacto: <span><?php echo $registro['numerousuario']?></span></h2>
        <div id="a_redes">
            <a href="<?php echo $registro['facebook']?>"><img src="imagenes/facebook1.png" width=20></a>
            <a href="<?php echo $registro['insta']?>"><img src="imagenes/instagram1.png" width=20></a>
            <a href="<?php echo $registro['twitter']?>"><img src="imagenes/twitter1.png" width=20></a>
        </div>
        <?php
        }
        mysqli_free_result($resultado);?><br>
        <a id="env_mensaje" href="msjof_empresa.php">Enviar mensaje</a>
</div>
</div>
</body>
</html>