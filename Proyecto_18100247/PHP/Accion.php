<?php 
$consulta = new PDO('mysql:host=localhost;dbname=YEPEZFE', 'root', 'Nando123'); 
if(isset($_POST['registrar']))
{
    $Nombre = $_POST['Nombre'];
    $Des = $_POST['Descripcion'];
    $Gra = $_POST['Gramos'];
    $Pre = $_POST['Precio'];
    $consulta->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
    $Asignar = $consulta->prepare("INSERT INTO PIZZA (nombre, descripcion, gramos, precio)VALUES('$Nombre', '$Des', '$Gra', '$Pre')");
    $Asignar->execute();
    
    echo'<script type="text/javascript">
    alert("Se agrego la pizza correctamente:)");
    window.location.href="pagina.php";
    </script>'; 
    exit;
}
else{
    if(isset($_POST['editar']))
    {
        $Nombre = $_POST['Nombre'];
        $Des = $_POST['Descripcion'];
        $Gra = $_POST['Gramos'];
        $Pre = $_POST['Precio'];
        $Num = $_POST['Numero'];
        $consulta->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
        $Asignar = $consulta->prepare("UPDATE PIZZA SET nombre = '$Nombre', descripcion = '$Des', gramos = '$Gra', precio = '$Pre' WHERE numero ='$Num'");
        $Asignar->execute();
        echo'<script type="text/javascript">
        alert("Se actualizo la pizza correctamente:)");
        window.location.href="pagina.php";
        </script>'; 
        exit;
    }
    else{
        if(isset($_POST['eliminar']))
        {
            $Nombre = $_POST['Nombre'];
            $Des = $_POST['Descripcion'];
            $Gra = $_POST['Gramos'];
            $Pre = $_POST['Precio'];
            $Num = $_POST['Numero'];
            $consulta->query("SET NAMES 'UTF8'"); //si no no me trae correcta la variable:(
            $Asignar = $consulta->prepare("DELETE FROM PIZZA WHERE numero ='$Num'");
            $Asignar->execute();
            echo'<script type="text/javascript">
            alert("Se borro la pizza correctamente:)");
            window.location.href="pagina.php";
            </script>'; 
            exit;
        }
}

/*
    echo'<script type="text/javascript">
    alert("No se registro correctamente, intente denuevo:(");
    window.location.href="pagina.php";
    </script>'; */
}
?>