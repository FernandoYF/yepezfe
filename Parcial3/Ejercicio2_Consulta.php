<?php
$servidor = "localhost";
$bd = "YEPEZFE";
$usuario = "root";
$contraseña = "Nando123";
try
{
    $conexionabd = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $contraseña);
    echo "Se logro la conexión a la base de datos $bd con éxito";
    echo "<br>";
}
catch(PDOException $error){
    echo "No se logro la conexión a la base de datos con éxito $bd";
    echo $error -> getMessage();
    exit();
}

$Selectatabla = "SELECT * FROM CUENTASALDO";
$Select = $conexionabd -> prepare($Selectatabla);
$Select -> execute();
echo "numero_Cuenta|titular|clabe_Interbancaria|numero_Tarjeta|saldo|nickname_Sesion|contraseña|<br>";

while($registro = $Select -> fetch()){
    echo 
    $registro['numero_Cuenta'].'---'.
    $registro['titular'].'---'.
    $registro['clabe_Interbancaria'].'---'.
    $registro['numero_Tarjeta'].'---'.
    $registro['saldo'].'---'.
    $registro['nickname_Sesion'].'---'.
    $registro['contraseña'].'<br>';
}
?>
