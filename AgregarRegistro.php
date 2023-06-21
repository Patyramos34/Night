<?php 
include("Conexionconbd.php");
$Correo=$_POST['Correo'];
$Usuario=$_POST['Usuario'];
$Contra=$_POST['Contra'];

$Agregar="INSERT INTO cuentas(Usuario,Correo,Contra ) VALUES ('$Usuario','$Correo','$Contra')";
$re=mysqli_query($conexion,$Agregar);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>