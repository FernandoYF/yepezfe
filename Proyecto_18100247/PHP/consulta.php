<?php
try {    
$server = "localhost"; 
$usuario = "root";
$contra = "Nando123";
$bd = "YEPEZFE";   
try
{
    $conexion = new PDO("mysql:host=$server;dbname=$bd", $usuario, $contra);
}
catch(PDOException $error){
    echo "No es posible conectar con la Base de datos: $bd";
    echo $error->getMessage();
    exit();
}


    $conexion->query("SET NAMES 'UTF8'");
    $consulta = $conexion->prepare("SELECT * FROM Usuario");
    $consulta -> execute();
    if (!$consulta) {
        echo 'Error en la consulta';
    }else {
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }
} catch (PDOException $ex) {
    echo $ex -> getMessage();
}
?>