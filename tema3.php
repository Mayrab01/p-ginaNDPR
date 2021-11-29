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
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%VULNERABILIDADES MÁS ALTAS.%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<h1  align = center > VULNERABILIDADES MÁS ALTAS.</h1>
<hr class="container linea" size=5>
<div class="container blockquote">
    <div class="row">
        <?php
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////(OBTENCION DE IMAGENES EN BD)////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresionmedia))
            {
                if($fila['Id_media']==24){
                    $imagen_p3_1 = $fila['archivo_img'];
                    $desc_1 = $fila['descripcion'];
                }
                if($fila['Id_media']==26){
                    $imagen_p3_2 = $fila['archivo_img'];
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
               if($fila['Id_info']==28){
                    echo "
                    <p>".$fila['contenido']."</p>
                    <br>
                    <br>";
                }
                ///////////////////////////////(Vulnerabilidades recurrentes.)//////////////////////////////////////
                if($fila['Id_info'] == 30){
                    echo"
                    <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                        <div class='col-md-6 mb-md-0 p-md-4 '>
                            <br>
                            <img src='".$imagen_p3_1."' class='w-100 rounded' alt='...'>
                        </div>
                        <div class='col-md-6 p-4 ps-md-0'>
                                <h5 class='mt-0 text-center'>".$fila['Encabezado']."</h5>
                                        <p class='accordion-header' id='headingDos'>
                                        <button class='accordion-button bg-secondary text-white collapsed rounded' type='button' data-bs-toggle='collapse' data-bs-target='#collapseDos' aria-expanded='false' aria-controls='collapseDos'>
                                        <p>".$fila['contenido']."</p>
                                        </button>
                                        </p>
                        </div>";
                }
                if($fila['Id_info'] == 32){
                    echo "
                        <div id='collapseDos' class='accordion-collapse collapse' aria-labelledby='headingDos' data-bs-parent='#accordionExample'>
                                <div class='accordion-body'>
                                            <p class='col-xs-1 col-sm-1 col-md-1'></p>
                                                <p class='col-xs-11 col-sm-11 col-md-11'>".$fila['contenido']."</p>
                                </div>
                            </div>
                    </div>
                    <p></p>";
                }
                ///////////////////////////////(Malas prácticas de los usuarios.)/////////////////////////////////////
                if($fila['Id_info'] == 34){
                    echo "
                    <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                        <div class='col-md-6 p-4 ps-md-1'>
                                <h4 class='text-center'>".$fila['Encabezado']."</h4>
                                <p class='accordion-header' id='headingOne'>
                                    <button class='accordion-button bg-secondary text-white collapsed rounded' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='false' aria-controls='collapseOne'>
                                        <p>".$fila['contenido']."</p>
                                    </button>
                                </p>
                        </div>";
                }
                if($fila['Id_info'] == 36){
                    echo "
                        <div class='col-md-6 mb-md-0 p-md-4'>
                            <br>
                                <img src='".$imagen_p3_2."' class='w-100 rounded' alt='".$desc_2."'>
                        </div>
                        <div id='collapseOne' class='accordion-collapse collapse' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                                <p>".$fila['contenido']."</p>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    ";
                }
            } 
        ?>
    </div>
    <div class="row">
        <center>
        <a class='col-md-4 mb-md-4 p-md-4' href="tema2.php"><i class="ion-chevron-left icono"></i></a>
        <a class='col-md-4 mb-md-4 p-md-4' href="">   </a>
        <a class='col-md-4 mb-md-4 p-md-4' href="tema4.php"><i class="ion-chevron-right icono"></i></a>
        </center>
        <br>
    </div>
</div>
<br>
<?php
include 'comentarios.php';
mysqli_close($link);
?>
<?php
include "pie.php";
?>