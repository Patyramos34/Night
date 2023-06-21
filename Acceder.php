<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="SECCION.css">
        <title>Morningstar</title>
        <link rel="shortcut icon" href="Fotos/Dise%C3%B1o%20sin%20t%C3%ADtulo.jpg" type="image/x-icon">
</head>

<body> 
        
    <center><form class="form" action="Pag-principal.html" method="POST">
        <div class="form-title"><span>Inicia sesion en tu</span></div>
         <div class="title-2"><span>CUENTA</span></div>
		 <section class="bg-stars">
           <span class="star"></span>
           <span class="star"></span>
           <span class="star"></span>
           <span class="star"></span>
         </section>
		<hr>
		 <?php 
		if(isset($_GET['error'])){
			?>
		<p class="error">
		  <?php echo $_GET['error']?>
		</p>
		<?php
		}
		
		?>
		<hr>
		
         <div class="input-container">
           <input class="input-mail" type="text" placeholder="Email o Usuario" name="Correo" required="required">
           <span> </span>
         </div>
  
        
		
         <div class="input-container">
           <input class="input-pwd" type="password" placeholder="Contraseña" name="Contra" required="required">
         </div>
		
        <button type="submit" class="submit">
			
          Acceder
			</button>

         <p class="signup-link">
           ¿No tienes cuenta?
           <a href="Registro.php" class="up">¡Registrate!</a>
         </p>
         </form>
  </center>
    
</body>
</html>