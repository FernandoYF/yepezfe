<?php
session_start();
include "Conexion.php";
$conexion->query("SET NAMES 'UTF8'");
$Usuario = $_POST['Usuario'];
$contra = $_POST['contra'];
$contra = md5($contra);
$validarLogin = $conexion->prepare("SELECT * FROM Usuario WHERE Nickname='$Usuario' and Contraseña='$contra'");
$validarLogin->execute();
if ($validarLogin->rowCount() > 0) {
    $_SESSION['Usuario'] = $Usuario;
    echo '
        <script>
        alert("HOLA, BIENVENIDO '.$_SESSION['Usuario'].'");
        </script>
        ';
    //header("Location: pagina.php");
    exit;
}
?>

