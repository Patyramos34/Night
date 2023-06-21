<?php 
include"Conexionconbd.php";
$sql="SELECT * FROM bands";




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Artistas.css">
<title>Artistas</title>
	<script defeer src="https://app.embed.im/snow.js"></script>
</head>
<body>
	<form action="listas-music.php" method="get">
	<h1 class="Title">ARTISTAS</h1>
	<div class="container">
	 <?php 
		$result=mysqli_query($conexion,$sql);
		
		while($row=mysqli_fetch_array($result)){
		$video=$row['Canciones'];
		/*while($row = $result->fetch_assoc()){*/
		?><div class="row">
		<div class="mb-4">
		<div class="card">
		  <img src="data:image/jpg;base64, <?php echo base64_encode($row['Imgen']); ?>" alt="">
			<h4><?php echo $row['Nombre']; ?></h4>
			<!--<h4><?php /*?><?php echo base64_encode($row['Canciones']); ?><?php */?></h4>-->
		    <iframe src="<?php echo $video?>"controls='controls'></iframe>
		
			
			
			
			
		
			
			
		</div>
		<?php } ?>
	</div>
		</div>
		</div>
		
		
		</form>
	
</body>
</html>