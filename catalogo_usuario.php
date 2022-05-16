<!DOCTYPE html>
<html lang="en">
<?php
    require "seguridad.php"; 
    $usuario = $_SESSION['username'] 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<?php
    include "cabecera.php";
?>
<body>
<div class="responsive">
<div id="contenido2">
    <h1>Proyectos disponibles para ti: </h1>
    <div id="tabla-proyectos">
    <?php
        include "conexion.php";
        $todos= "SELECT * FROM contacto";
        $resultado = mysqli_query($conectar, $todos);
        while ($row = mysqli_fetch_assoc($resultado)){
    ?>
        <table>
            <tr>
                <?php
                    $prueba = $row['email_empresa'];
                    $todos2= "SELECT * FROM logos WHERE usuario = '$prueba'";
                    $resultado2 = mysqli_query($conectar, $todos2);
                    $row2 = mysqli_fetch_assoc($resultado2);

                    $verificar_img = mysqli_query($conectar , "SELECT * FROM logos WHERE usuario = '$prueba' ");
                    if( mysqli_num_rows($verificar_img) > 0 ){
                        ?>
                        <td rowspan="4"><div id="foto-empresa"><img src="<?php echo $row2['logo']; ?>" alt=""></div></td>
                        <?php
                    }else{
                        echo '<td rowspan="4"><div id="foto-empresa"><img src="imagenes/usuario.png" alt=""></div></td>';
                    }
                ?>
                <td colspan="2"><?php echo $row['nombre_empresa']; ?></td>
            </tr>
            <tr>
                <td colspan="2" class="test"><?php echo $row['comentarios_empresa']; ?></td>
            </tr>
            <tr>
                <td class="test2">Correo:</td>
                <td class="test"><?php echo $row['email_empresa']; ?></td>
            </tr>
            <tr>
                <td class="test2">Telefono:</td>
                <td class="test">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $row['celular_empresa']?>&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20vacantes%20." target="_blank">
                <img src="imagenes/whatsapp.png" width="60px"></td>
            </tr>
            <?php
            
            $verificar_pro = mysqli_query($conectar , "SELECT * FROM proyectos WHERE usuario = '$prueba' ");
            if( mysqli_num_rows($verificar_pro) > 0 ){
            
            $todos4= "SELECT * FROM proyectos WHERE usuario = '$prueba' ";
            $resultado4 = mysqli_query($conectar, $todos4);
            while ($row4 = mysqli_fetch_assoc($resultado4)){
                ?>
                <tr>
                    <td>Proyecto:</td>
                    <td colspan="2" class="test"><?php echo $row4['nombre_proyecto']; ?></td>
                </tr>
                <tr>
                    <td id="th">Responsable:</td>
                    <td colspan="2" class="test"><?php echo $row4['responsable_proyecto']; ?></td>
                </tr>
                <tr>
                    <td id="th">Vacante:</td>
                    <td colspan="2" class="test"><?php echo $row4['area']; ?></td>
                </tr>
                <tr>
                    <td id="th">Descripcion:</td>
                    <td colspan="2" class="test"><?php echo $row4['comentarios_proyecto']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"></td>
                </tr>
                <?php
                }
                mysqli_free_result($resultado4);
                ?>
            </table>
            <?php
            }else{
                echo '</table>';
            }
            ?>
        <br>
        <?php 
            }
            mysqli_free_result($resultado);
        ?>
    </div>
</div>
</div>
</body>
<?php
    include "footer.php";
?>
</html>