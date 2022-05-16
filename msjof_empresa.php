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
<H1>Escribe tu mensaje</H1><br>
<div id="subcontenido_popup">
    <form name="contenedor_form" action="guardar_mensaje.php" method="post" enctype="multipart/form-data">
    <textarea name="mensaje" placeholder="Somos la empresa...Me gustaria..." id=""></textarea required>    
    <input type="submit" value="Enviar" id="env_mensaje">    
</form><br>
</div>
</div>
</body>
</html>
