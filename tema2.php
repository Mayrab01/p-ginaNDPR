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
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<h1 class="" align = center >VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES</h1>
<hr class="container linea" size=5>
<div class="container">
    <div class="row">
        <?php
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////(OBTENCION DE IMAGENES EN BD)////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresionmedia))
            {
                if($fila['Id_media']==18){
                    $imagen_p2_1 = $fila['archivo_img'];
                    $desc_1 = $fila['descripcion'];
                }
                if($fila['Id_media']==20){
                    $imagen_p2_2 = $fila['archivo_img'];
                    $desc_2 = $fila['descripcion'];
                }
                if($fila['Id_media']==22){
                    $video_p2_1 = $fila['archivo_video'];
                    $desc_3 = $fila['descripcion'];
                }
            }
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////(OBTENCION E INTEGRACION DE INFORMACION DE BD)////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresion))
            {
               if($fila['Id_info']==18){
                    echo "
                    <div class='col-xs-6 col-sm-12 col-md-15'>
                        <p>".$fila['contenido']."</p>
                    </div>";
                }
                if($fila['Id_info']==20){
                    echo"
                    <div class='col-xs-12 col-sm-6 col-md-9'>
                    <p>".$fila['contenido']."</p>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-3'>
                    <picture>
                    <img class='img-thumbnail img' 
                            src='".$imagen_p2_1."'
                            alt='".$desc_1."'>
                    </picture>
                    </div>";
                }
                /////(¿Cómo afectan las redes sociales la seguridad e integridad de las personas?)//////////////////
                if($fila['Id_info']==22){
                    echo "
                    <div class='blockquote'>
                    <b>".$fila['Encabezado']."</b>    
                    </div>
                    <div class='col-xs-6 col-sm-12 col-md-15'>
                        <p>".$fila['contenido']."</p>
                    </div>
                    <div align='center'>
                    <div class='col-xs-12 col-sm-6 col-md-5'> 
                    <picture>
                    <img class='img-thumbnail img' 
                            src='".$imagen_p2_2."' 
                            alt='".$desc_2."'>
                    </picture><br/><br/><br/>
                    </div>
                    </div>";
                }
                //////////////////////////////(Algunas de las vulnerabilidades)/////////////////////////////////////
                if($fila['Id_info']==24){
                    echo "
                    <div class='blockquote'>
                    ".$fila['Encabezado']."<br/>
                    </div>
                    <div class='col-xs-6 col-sm-12 col-md-15'>
                        <p>".$fila['contenido']."</p>
                    </div>";
                }
                /////////////////////////(¿Cómo prevenir riesgos en redes sociales?)////////////////////////////////
                if($fila['Id_info']==26){
                    echo "
                    <div class='blockquote'>
                    </br>
                    <b>".$fila['Encabezado']."</b>     
                    </div>
                    <div class='col-xs-6 col-sm-12 col-md-15'>
                        <p>".$fila['contenido']."</p>
                    </div> 
                    <div align='center'>
                        <div class='ratio ratio-16x9'>
                            <iframe class='col-xs-12 col-sm-6 col-md-8' src='".$video_p2_1."' title='".$desc_3."' allowfullscreen></iframe>
                        </div>
                    </div>
                    ";
                }
            } 
        ?>
    </div>
</div>

<div class="row">
<center>
        <a class='col-md-4 mb-md-4 p-md-4' href="tema1.php"><i class="ion-chevron-left icono"></i></a>
        <a class='col-md-4 mb-md-4 p-md-4' href="">   </a>
        <a class='col-md-4 mb-md-4 p-md-4' href="tema3.php"><i class="ion-chevron-right icono"></i></a>
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