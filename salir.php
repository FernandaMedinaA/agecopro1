<?php
  session_start();
  session_destroy();
  echo '
        <script>
            alert("CERRANDO LA SESION DE FORMA SEGURA");
            location.href="index.php";
        </script>
    ';
?>