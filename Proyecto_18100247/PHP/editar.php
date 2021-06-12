<?php 
$consulta = new PDO('mysql:host=localhost;dbname=YEPEZFE', 'root', 'Nando123'); 
if(isset($_POST['editar']))
{
    $Nombre = $_POST['Nombre'];
    $Des = $_POST['Descripcion'];
    $Gra = $_POST['Gramos'];
    $Pre = $_POST['Precio'];
    $consulta->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
    $Asignar = $consulta->prepare("UPDATE PIZZA SET nombre = '$Nombre', descripcion = '$Des', gramos = '$Gra', precio = '$Pre' WHERE numero ='$Num')");
    $Asignar->execute();
    echo'<script type="text/javascript">
    alert("Se actualizo la pizza correctamente:)");
    window.location.href="pagina.php";
    </script>'; 
    exit;
}
else{
    echo'<script type="text/javascript">
    alert("No se logro la actualización, intente denuevo:(");
    window.location.href="pagina.php";
    </script>'; 
}
    
?>