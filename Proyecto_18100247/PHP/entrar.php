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
        $Entrar = $conexion->prepare("SELECT * FROM Usuario WHERE Nickname='$Usuario' and Contraseña='$contra'");
        $Entrar->execute();
        if ($Entrar->rowCount() > 0) {
            $_SESSION['Usuario'] = $Usuario;
            echo'<script type="text/javascript">
            alert("Iniciando sesión en:'.$_SESSION['Usuario'].'");
            window.location.href="pagina.php";
            </script>'; 
            exit;
}
        else{
            echo'<script type="text/javascript">
            alert("Usuario / Contraseña incorrectos, intente denuevo:(");
            window.location.href="index.php";
            </script>'; 
            }
    ?>