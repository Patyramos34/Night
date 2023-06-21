<?php 
session_start();
include("Conexionconbd.php");

if(isset($_POST['Correo']) && isset($_POST['Contra']) ){
	function validar($dato){
		$dato=trim($dato);
		$dato=stripcslashes($dato);
		$dato=htmlspecialchars($dato);
		return $dato;
	}
	$Correo=validar($_POST['Correo']);
	$Contra=validar($_POST['Contra']);
	
	{
		
		$Sql="SELECT * FROM cuentas WHERE Correo = '$Correo' AND Contra=$Contra";
		$re=mysqli_query($conexion,$Sql);
		
		if(mysqli_num_rows($re)=== 1){
			$row= mysqli_fetch_assoc($re);
			if($row['Correo']=== $Correo && $row['Contra']===$Contra){
				$_SESSION['Correo']=$row['Correo'];
				$_SESSION['id']=$row['id'];
				header("Location:pres_music.php");
					exit();
			}else{
				header("Location:Acceder.php?error=Alguno de tus datos es incorrecto");
				exit();
			}
		}else{
			header("Location:Acceder.php?error=Alguno de tus datos es incorrecto");
				exit();
		}
	}
}



?>