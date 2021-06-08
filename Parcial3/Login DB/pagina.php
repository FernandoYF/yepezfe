<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Bienvenida</title>
</head>
<body>
    <h2>Inisio Sesión</h2>
    <?php
        session_start();
        echo '<script language="javascript">alert("BIENVENIDO: '.$_SESSION['Usuario'].'");</script>';
        echo "<h3>HOLA!!:  " . $_SESSION["Usuario"] . "</h3><br>";
    ?>
    <br>
    <script type="text/javascript">
        var Fecha = new Date();
        document.write('Fecha: '+Fecha.getDate(),'<br>Dia de la semana: '+Fecha.getDay(),'<br>Número del Mes: '+Fecha.getMonth(),'<br>Año: '+Fecha.getFullYear(),'<br>Hora: '+Fecha.getHours(),'<br>Hora UTC: '+Fecha.getUTCHours(),'<br>Minutos: '+Fecha.getMinutes(),'<br>Segundos: '+Fecha.getSeconds());
    </script>
    <a href="Salir.php">Cerrar sesión</a>
</body>
</html>