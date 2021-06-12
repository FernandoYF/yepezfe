<?php 
$consulta = new PDO('mysql:host=localhost;dbname=YEPEZFE', 'root', 'Nando123'); 
if(isset($_POST['registrar']))
{
    $Nombre = $_POST['Nombre'];
    $Des = $_POST['Descripcion'];
    $Gra = $_POST['Gramos'];
    $Pre = $_POST['Precio'];
    $Num;
    $consulta->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
    $Asignar = $consulta->prepare("DELETE FROM PIZZA WHERE numero ='$Num')");
    $Asignar->execute();
    echo'<script type="text/javascript">
    alert("Se borro la pizza correctamente:)");
    window.location.href="pagina.php";
    </script>'; 
    exit;
}
else{
    echo'<script type="text/javascript">
    alert("No se logro la eliminación, intente denuevo:(");
    window.location.href="pagina.php";
    </script>'; 
}
    
?>