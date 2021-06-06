<?php
        session_start();
        echo "<h1>Bienvenido, inicio sesión " . $_SESSION["usuario"] . "</h1>";
        <p><a href="salir.php">Cerrar Sesión</a></p>
?>
