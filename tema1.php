<!--
// NDPR WEB (Página web)
//
// Objeto: Pagina web
// Autores: 
//  Barron Resendiz Mayra
//  Castillo Buentello Alan Yair
//  García Uriostegui Fredy
//  Hernandez Monroy Lesly Jazmín
//  Rojo Rios Jesus
//
// Fecha de creación: 18/10/21
//
// Historial de modificacion
// Versión      Modificador          Fecha            Cambio
// 0.1          Fredy Uriostegui    30/10/21          Pagina dinamica 
// 0.2          Mayra Barrón        01/11/21          Seccion de comentarios
-->

<?php
include "encabezado.php";
include "conexion.php";
?>
<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////(INFORMACION_BD)///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////(INFORMACION)/////////////////////////////
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%DATOS PERSONALES EN LAS REDES SOCIALES%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            ////////////////////////(MEDIA)////////////////////////////////
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<title>DATOS PERSONALES EN LAS REDES SOCIALES</title>
<h1 class="" align = center >DATOS PERSONALES EN LAS REDES SOCIALES</h1>
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
                  if($fila['Id_media']==14){
                    $video1 = $fila['archivo_video'];
                  }
                  if($fila['Id_media']==16){
                    $imagen_p1 = $fila['archivo_img']; 
                  }
                }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////(OBTENCION E INTEGRACION DE INFORMACION DE BD)////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
                while($fila=mysqli_fetch_array($resultadoimpresion))
                {
                        ////////////////////////(Datos personales)///////////////////////////
                        if($fila['Id_info'] == 8){
                        echo 
                        "<br>
                        <div class='container'>
                          <div class='row'>
                              <div class='blockquote'>
                                <h3> <b>".$fila['Encabezado']."</b> </h3>       
                              </div>
                              <div>
                                <p>".$fila['contenido']."</p>
                              </div>";
                        }
                        if($fila['Id_info'] == 10){
                              echo "
                              <center>
                                <div>
                                <h5> <b>".$fila['Encabezado']."</b> </h5>   
                                     ".$fila['contenido']."  
                                </div>
                              </center>
                              <p>
                              <div align='center'>
                               <div class='ratio ratio-16x9'>
                                <iframe class='col-xs-12 col-sm-6 col-md-12' src='".$video1."' title='video 1' allowfullscreen></iframe>
                               </div>
                              </div>";
                              echo "
                            </div>  
                        </div>";
                        }
                        //////////////////////(Tipos de datos personales)////////////////////////
                        if($fila['Id_info'] == 12){
                            echo"
                                <p style= text-align:justify;>
                                    <h3> <b>".$fila['Encabezado']."</b></h3>
                                    <br>".$fila['contenido']."
                                </p>";
                        }
                        ///(Datos de carácter personal proporcionados en esferas de internet)////
                        if($fila['Id_info'] == 14){
                            echo "
                                <p style= text-align:justify;>
                                <h5> <b>".$fila['Encabezado']."</b></h5>
                                ".$fila['contenido']."
                            </p>";
                        }
                        /////////////////////(IMAGEN_GIF)///////////////////////////////////////////
                        if($fila['Id_info'] == 16){
                            echo"<div align = 'center'>
                                    <div class = 'col-xs-12 col-sm-6 col-md-5'>
                                        <img class ='img-thumbnail img' src='".$imagen_p1."'>
                                    </div>
                                </div>
                                <br>";
                        }
                }
        ?>
    </div>
  </div>
</div>
<!--///////////////////////////////////////////(<-SALTOS DE PAGINAS->)/////////////////////////////////////////////////-->
<div class="row">
<center>
        <a class='col-md-4 mb-md-4 p-md-4' href="index.php"><i class="ion-chevron-left icono"></i></a>
        <a class='col-md-4 mb-md-4 p-md-4' href="">   </a>
        <a class='col-md-4 mb-md-4 p-md-4' href="tema2.php"><i class="ion-chevron-right icono"></i></a>
</center>
</div>
<br>
<?php
include 'comentarios.php';
mysqli_close($link);
?>
<?php
include "pie.php";
?>