<?php
include 'conexion.php';
include 'encabezado.php';
?>

	<title>Login</title> 
	<link rel="stylesheet" href="estiloLogin.css">
    <form method="get" action="validar.php" class="formulario" >
    <h1>Login</h1>

     <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" placeholder="Correo Electronico" name="Correo" autofocus required>
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contrasena" autofocus required>
         
         </div>
         <input type="submit" value="Empezar" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registra-usuario.php">Registrate </a></p>
     </div> 
    </form><br><br>

<?php
include 'pie.php';
?>