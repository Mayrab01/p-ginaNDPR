<?php
include 'conexion.php';


if(isset($_GET['btnSend'])){
    $nombre=$_GET['nombre'];
    $mensaje=$_GET['mensaje'];
    
    
    $consulta = "INSERT INTO registro1(nombre,mensaje)value('$nombre','$mensaje')";
    $resultado=mysqli_query($link, $consulta);
    //echo "estoy dentro";
    // Datos para el correo
    $destinatario = "mayrabarron91@gmail.com";
    $asunto = " Comentario de la página NUESTROS DATOS EN LAS REDES SOCIALES ";
    
    $carta = "De: $nombre \n";
    
    $carta .= "Comentario: $mensaje";
    // Enviando Mensaje
    mail($destinatario, $asunto, $carta);   
}
else{
    //echo "No estas dentro";
}
?>
<div class="container">
  <div class="row">
    <div class="blockquote">
          <html>
            <body>
            <form action="#" method="GET" class="formulario" >
                <h1><p>Deja tu comentario</p></h1>
                <div class="input-contenedor">
                  <i class="fas fa-user icon"></i>
                  <p>Nombre</p>
                  <input type="text" id="nombre" name="nombre" required>     
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <p>Comentario</p>
                    <textarea id="mensaje" name="mensaje" cols="100" rows="10" required></textarea>
                </div>  
                <input type="submit" name = "btnSend" value="Enviar comentario" id="btnSend">
            </form>
      </body>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
          <p>
              <h4><b><center>  Comentarios </center><b><h4>
        
              </tr>
        </thead>
          <tbody>
            <?php        
              $imprimetabla = "SELECT * FROM registro1 ORDER BY id_com DESC";
              $resultadoimpresion = mysqli_query($link,$imprimetabla);
              while ($fila=mysqli_fetch_array($resultadoimpresion)){
                  
                  echo "<tr>"."<td>".$fila['FH']."<br>".$fila['nombre']."<br>".$fila['mensaje']."</td>";  
                      }
              ?>
          </tbody>
      </table>
      <html>

    </div>		
  </div>
</div>
