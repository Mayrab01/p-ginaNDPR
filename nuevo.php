<?php
include 'conexion.php';
$nombre=$_GET['Nombre'];
$correo=$_GET['Correo'];
$contraseña=$_GET['Contrasena'];
$consulta="INSERT INTO usuarios (Nombre,Correo,Contrasena)"
    ."value ('$nombre','$correo', '$contraseña')";
$resultado=mysqli_query($link,$consulta);
?>
 <script type="text/javascript">
    window.location="menu-actividades.php";
</script>