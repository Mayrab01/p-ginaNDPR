<!--
// NDPR WEB (Página web)
//
// Objeto: Página web
// Autores: 
//  Barrón Resendiz Mayra
//  Castillo Buentello Alan Yair
//  García Uriostegui Fredy
//  Hernández Monroy Lesly Jazmín
//  Rojo Rios Jesús
//
// Fecha de creación: 18/10/21
//
// Historial de modificación
// Versión      Modificador          Fecha            Cambio
// 0.1          Fredy Uriostegui    30/10/21          Página dinámica 
// 0.2          Mayra Barrón        01/11/21          Sección de comentarios
-->

<?php
include "encabezado.php";
include "conexion.php";
?>
<?php
//////////////////////////////////////////(INFORMACION_BD)///////////////////////////////////////////////////////////////
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<h1 class="" align = center >LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES</h1>
<hr class="container linea" size=5>
<div class="container">
  <div class="row">
    <div class="blockquote">
        <?php
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////(OBTENCION DE IMAGENES EN BD)////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresionmedia))
            {
                if($fila['Id_media']==28){
                    $imagen_p4_1 = $fila['archivo_img'];
                    $desc_1 = $fila['descripcion'];
                }
                if($fila['Id_media']==30){
                    $video_p4_1 = $fila['archivo_video'];
                    $desc_2 = $fila['descripcion'];
                }
            }
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////(OBTENCION E INTEGRACION DE INFORMACION DE BD)////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresion))
            {
               if($fila['Id_info']==38){
                    echo "
                    <div>
                    <p>".$fila['contenido']."</p>
                    </div>";
                }
                if($fila['Id_info'] == 40){
                    echo"
                    <div>
                        <p>".$fila['contenido']."</p>
                    </div>
                    <div align = 'center'>
                    <div class = 'col-xs-12 col-sm-6 col-md-5'>
                      <img class ='img-thumbnail img'
                          src = '".$imagen_p4_1."' alt='".$desc_1."'>
                    </div>
                    </div>";
                }
                ///////////////////////(¿En qué consiste el derecho a la protección de datos personales?)/////////////////
                if($fila['Id_info']==42){
                    echo"
                    <p>
                    <h3> <b>".$fila['Encabezado']."</b></h3> 
                    <div>
                        <p>".$fila['contenido']."</p>
                    </div>
                    ";
                }
                ////////////////////////////////(Estudio AMIPCI en materia de redes sociales)/////////////////////////////
                if($fila['Id_info']==44){
                    echo"
                    <div class='blockquote'>
                        <h3> <b>".$fila['Encabezado']."</b></h3>       
                    </div>
                    <div>
                        <p>".$fila['contenido']."</p>
                    </div>
                    <div align='center'>
                        <div class='ratio ratio-16x9'>
                            <iframe class='col-xs-12 col-sm-6 col-md-12' src='".$video_p4_1."' title='".$desc_2."' allowfullscreen></iframe>
                        </div>
                    </div>";
                }
            } 
        ?>
    </div>
  </div>
  <p>
  <center>
    <a class='col-md-4 mb-md-4 p-md-4' href="tema3.php"><i class="ion-chevron-left icono"></i></a>
    <a class='col-md-4 mb-md-4 p-md-4' href=""></a>
    <a class='col-md-4 mb-md-4 p-md-4' href="tema5.php"><i class="ion-chevron-right icono"></i></a>
    </center>
    <br>
</div>
<br>
<?php
include 'comentarios.php';
mysqli_close($link);
?>
<?php
include "pie.php";
?>