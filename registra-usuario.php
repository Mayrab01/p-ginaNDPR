<?php
include 'conexion.php';
include 'encabezado.php';
?>

	<title>Registro</title> 
	<link rel="stylesheet" href="estiloLogin.css"> 

 <form method="get" action="nuevo.php" class="formulario" >
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="Nombre" placeholder="Nombre Completo" autofocus required>
     </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" name="Correo" placeholder="Correo Electronico" autofocus required>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="Contrasena" placeholder="Contraseña" autofocus required>
         
         </div>
         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
      <!--   <p>¿Ya tienes una cuenta?<a class="link" href="act-tema2.php">Iniciar Sesion</a></p> -->
     </div>
    </form><br><br>

<?php
include 'pie.php';
?>

