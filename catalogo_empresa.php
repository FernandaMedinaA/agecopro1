<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad_empresa.php"; 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <?php
        include "cabecera_empresa.php";
    ?>
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<body>
<div class="responsive">
    <div id="bloque">
            <h4>¿Ya conociste a nuestros futuros profesionistas?</h4>
            <p>Aqui se muestra el listado de aspirantes que estan dispuestos a colaborar contigo y tu empresa.</p>
    </div>
    <hr id="linea_amarilla">
    <div id="contenido">
        <div class="info_general">
            <table class="tabla1">
            <tr>
                <th>Universidad de egreso</th>
                <th>Lugar de residencia</th>
                <th>Area de especialización</th>
                <th>Descripción de experiencia</th>
                <th>Información personal</th>
                <th>Portafolio</th>
            </tr>
            <?php
            include "conexion.php";
            $todos2 = "SELECT * FROM perfil";
            $resultado2 = mysqli_query($conectar, $todos2);
            while($registro2 = mysqli_fetch_assoc($resultado2))
            {
            ?>
            <tr>
                <td><?php echo $registro2["universidad"]; ?></td>
                <td><?php echo $registro2["residencia"]; ?></td>
                <td><?php echo $registro2["area"]; ?></td>
                <td><?php echo $registro2["comentario"]; ?></td>
                <?php
                include "conexion.php";
                $todos = "SELECT * FROM informacion";
                $resultado = mysqli_query($conectar, $todos);
                while($registro = mysqli_fetch_assoc($resultado))
                {
                ?>
                <td><a href="javascript:popUp('ventana.php?id=<?php echo $registro['id'].'&user='.$registro['usuario']?>')"><img src="imagenes/ojo.png" width="40px"></a></td>
                    <?php
                }
                mysqli_free_result($resultado);?> <!--Deja de obtener resultados-->
                <td><a href="muestra_portafolio.php?id=<?php ?>"><img src="imagenes/portafolio.png" width="40px"></a></td>
            </tr>
            <?php
            }
            mysqli_free_result($resultado2);?> <!--Deja de obtener resultados-->
            </table>
        </div><br>
    </div><br>
    <script type="text/javascript">
        function popUp(URL) {
            window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=none,width=420,height=280');
        }
    </script>
</div>
</body>
<?php
include "footer.php";
?>
</html>
