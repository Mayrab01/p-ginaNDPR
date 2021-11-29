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
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<h1  align = center >ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.</h1>
<hr class="container linea" size=5>
<div class="container blockquote">
    <div class="row">
        <?php
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////(OBTENCION DE IMAGENES EN BD)////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresionmedia))
            {
                if($fila['Id_media']==32){
                    $imagen_p5_1 = $fila['archivo_img'];
                    $desc_1 = $fila['descripcion'];
                }
                if($fila['Id_media']==34){
                    $imagen_p5_2 = $fila['archivo_img'];
                    $desc_2 = $fila['descripcion'];
                }
                if($fila['Id_media']==36){
                    $imagen_p5_3 = $fila['archivo_img'];
                    $desc_3 = $fila['descripcion'];
                }
                if($fila['Id_media']==38){
                    $imagen_p5_4 = $fila['archivo_img'];
                    $desc_4 = $fila['descripcion'];
                }
            }
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////(OBTENCION E INTEGRACION DE INFORMACION DE BD)////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresion))
            {
               if($fila['Id_info']==46){
                    echo "
                    <p>".$fila['contenido']."</p>";
                }
                //////////////////////////////////(Uso de las redes sociales en el mundo.)////////////////////////////////
                if($fila['Id_info']==48){
                    echo "
                <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                    <div class='col-md-6 p-4 ps-md-1'>
                        <h4 class='text-center'>".$fila['Encabezado']."</h4>
                                    <p class='accordion-header' id='headingOne'>
                                    <button class='accordion-button bg-secondary text-white collapsed rounded' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='false' aria-controls='collapseOne'>
                                    <p>".$fila['contenido']."</p>
                                    </button>
                                    </p>
                    </div>
                    <div class='col-md-6 mb-md-0 p-md-4'>
                            <img class='w-100 rounded' src='".$imagen_p5_1."' alt='".$desc_1."'>
                    </div>";
                }
                if($fila['Id_info']==50){
                    echo "
                        <div id='collapseOne' class='accordion-collapse collapse' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                                <div class='accordion-body'>
                                <p class='col-xs-1 col-sm-1 col-md-1'></p>
                                <p class='col-xs-11 col-sm-11 col-md-11'>
                                    <b>Ranking de consumo de redes sociales de acuerdo al área demográfica:</b>
                                    <p class='col-xs-9 col-sm-2 col-md-2'></p>
                                    <ol class='col-xs-3 col-sm-10 col-md-10'>
                                    ".$fila['contenido']."</ol>
                                </p>
                                </div>
                        </div>
                    </div>
                    <p></p>";
                }
                //////////////////////////////////(Tiempo dedicado a las redes sociales.)////////////////////////////////
                if($fila['Id_info']==52){
                    echo "
                    <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                        <div class='col-md-6 mb-md-0 p-md-4'>
                            <img class='w-100 rounded' src='".$imagen_p5_2."' alt='".$desc_2."'>
                        </div>
                        <div class='col-md-6 p-4 ps-md-1'>
                            <h4 class='text-center'>".$fila['Encabezado']."</h4>
                                    <p>".$fila['contenido']."</p>
                        </div>
                    </div>
                    <p></p>";
                }
                /////////////////////////////////(Redes sociales más utilizadas en el mundo.)/////////////////////////////
                if($fila['Id_info']==54){
                    echo "
                    <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                        <div class='col-md-6 p-4 ps-md-1'>
                            <h4 class='text-center'>".$fila['Encabezado']."</h4>
                                        <p class='accordion-header' id='headingDos'>
                                        <button class='accordion-button bg-secondary text-white collapsed rounded' type='button' data-bs-toggle='collapse' data-bs-target='#collapseDos' aria-expanded='false' aria-controls='collapseDos'>
                                        <p>".$fila['contenido']."</p>
                                        </button>
                                        </p>
                        </div>
                        <div class='col-md-6 mb-md-0 p-md-4'>
                            <br>
                            <br>
                            <br>
                            <img class='w-100 rounded' src='".$imagen_p5_3."' alt='".$desc_3."'>
                        </div>";
                }
                if($fila['Id_info']==56){
                    echo "
                        <div id='collapseDos' class='accordion-collapse collapse' aria-labelledby='headingDos' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                                <p class='col-xs-0 col-sm-1 col-md-2'></p>  
                                    <p class='col-xs-2 col-sm-2 col-md-2'></p>
                                    <ol class='col-xs-10 col-sm-10 col-md-10'>".$fila['contenido']."</ol>
                            </div>
                        </div>
                    </div>
                    <p></p>";
                }
                /////////////////////////////////(Redes sociales mas utilizadas en México.)///////////////////////////////
                if($fila['Id_info']==58){
                    echo "
                    <div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                    <div class='col-md-6 mb-md-0 p-md-4'>
                    <br>
                    <br>
                        <img class='w-100 rounded' src='".$imagen_p5_4."' alt='".$desc_4."'>
                    </div>
                    <div class='col-md-6 p-4 ps-md-1'>
                        <h4 class='text-center'>".$fila['Encabezado']."</h4>
                                <p>".$fila['contenido']."</p>
                    </div>
                </div>
                <p></p>";
                }
            } 
        ?>
    </div>
    <center>
    <a href="tema4.php"><i class="ion-chevron-left icono"></i></a>
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