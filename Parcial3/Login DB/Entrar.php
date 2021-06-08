<?php
    session_start();
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
    $conexion->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
    $Usuario = $_POST['Usuario'];
    $contra = $_POST['contra'];
    $contra = md5($contra);
    $Login = $conexion->prepare("SELECT * FROM Usuario WHERE Nickname='$Usuario' and Contraseña='$contra'");
    $Login->execute();
    if ($Login->rowCount() > 0) {
        $_SESSION['Usuario'] = $Usuario;
        header("Location: pagina.php");
    exit;
}
else{
        echo '<script language="javascript">alert("Contraseña o Usuario incorrectos:( intenta denuevo");</script>';
        //header("Location: index.php");
}
?>

