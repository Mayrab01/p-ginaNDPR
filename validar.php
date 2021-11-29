<?php
include 'conexion.php';
$Correo=$_GET['Correo'];
$Contraseña=$_GET['Contrasena'];
session_start();
$_SESSION['Correo']=$Correo;
$consulta="SELECT*FROM usuarios where Correo='$Correo' and Contrasena='$Contraseña'";
$resultado=mysqli_query($link,$consulta);

$fila=mysqli_num_rows($resultado);

if($fila){
    header("location:menu-actividades.php");
}else{
    echo '<script language="javascript">';
    echo 'alert("Error de autenticación")';
    echo '</script>';
    include("login-usuario.php");
    
   // <h1 class="bad">Error de autenticación</h1>
   ?>

<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>