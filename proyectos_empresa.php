<?php
    require "seguridad_empresa.php"; 
    $usuario = $_SESSION['username'] 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <?php
        include "cabecera_empresa.php";
    ?>
</head>
<body>
<div class="responsive">
    <div id="bloque">
        <h4>¿Idea nueva?</h4>
        <p>Comienza hoy</p>
    </div>
    <hr id="linea_amarilla">
    <div class="cuerpo">
        <div id="general">
            <div id="contenido_proyectos1">
            <h1>Registra tu proyecto.</h1>
                <div class="contenedor_nombres3">
                    <p>Nombre:</p>
                    <p>Responsable: </p>
                    <p>Area:</p>
                    <p>Descripcion:</p><br><br>
                </div>
                <div class="contenedor_elementos3">
                    <form name="contenedor_form" action="guardar_proyectos.php" method="post" enctype="multipart/form-data"> <!--Por abajo metodo -->
                        <input type="text" name="nombre_proyecto" class="campos3" required><br>
                        <input type="text" name="responsable_proyecto" class="campos3" required><br>
                        <select name="area" id="">
                            <option value="Web">Web</option>
                            <option value="Soporte">Soporte Técnico</option>
                            <option value="Telecomunicaciones">Telecomunicaciones</option>
                            <option value="Programacion">Programación</option>
                        </select>
                        <textarea name="comentarios_proyecto" class="textarea3"></textarea required><br>
                        <input type="submit" value="Enviar" id="enviar3">
                        <!--<input type="button"> <!--Solo con javascript -->
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>