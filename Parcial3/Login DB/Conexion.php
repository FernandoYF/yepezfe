<?php
    $server = "localhost"; 
    $usuario = "root";
    $contra = "Nando123";
    $bd = "YEPEZFE";
    
    try
    {
        $conexion = new PDO("mysql:host=$server;dbname=$bd", $usuario, $contra);
    }
    catch(PDOException $error){
        echo "Ha ocurrido un error al conectar a $bd";
        echo $error->getMessage();
        exit();
    }
?>