<?php
    $server = "localhost"; 
    $usuario = "root";
    $Contraseña = "Nando123";
    $bd = "YEPEZFE";
    
    try
    {
        $conexion = new PDO("mysql:host=$server;dbname=$bd", $usuario, $Contraseña);
    }
    catch(PDOException $error){
        echo "Ha ocurrido un error al conectar a ".$db;
        echo $error->getMessage();
        exit();
    }
?>