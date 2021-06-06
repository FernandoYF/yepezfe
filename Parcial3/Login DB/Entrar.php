<?php
    session_start();
    include "Conexion.php";
    
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
$Contraseña = md5($Contraseña);



$Consulta="SELECT * FROM Usuario WHERE Nickname='$Usuario' and Contraseña='$Contraseña'";
$Resultado= $conexion->prepare($Consulta);
$Resultado->execute();

if($Resultado->rowCount() > 0)
{
    $_SESSION['Usuario'] = $Usuario;
    header("Location: pagina.php");
}
else
{
    echo "Error con la autentificacion, Usuario/Clave invalida, intente de nuevo.";
}

?>


