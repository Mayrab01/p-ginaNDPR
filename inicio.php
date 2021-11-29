<?php
include "conexion.php";
?>
<?php
//////////////////////////////////////////(INFORMACION_BD)///////////////////////////////////////////////////////////////
            $imprimetabla="SELECT*FROM informacion WHERE pagina LIKE '%inicio%';";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            $imprimetablamedia="SELECT media.Id_media,media.descripcion,imagen.archivo_img,video.archivo_video 
            FROM media
            INNER JOIN imagen
            ON media.Id_media = imagen.id_media
            INNER JOIN video
            ON media.Id_media = video.Id_media;";
            $resultadoimpresionmedia=mysqli_query($link,$imprimetablamedia);
?>
<h1  align = center >Nuestros datos en las redes sociales y su vulnerabilidad en ellas</h1>
<hr class="container linea" size=5>
<div class="container blockquote" charset="UTF-8">
    <div class="row">
<?php
            while($fila=mysqli_fetch_array($resultadoimpresionmedia))
            {
                if($fila['Id_media'] == 2){
                    $imagen_inicio = $fila['archivo_img'];
                    $desc0 = $fila['descripcion'];
                }
                if($fila['Id_media'] == 4){
                    $imagen_carusel_1 = $fila['archivo_img'];
                    $desc1 = $fila['descripcion'];
                }
                if($fila['Id_media'] == 6){
                    $imagen_carusel_2 = $fila['archivo_img'];
                    $desc2 = $fila['descripcion'];
                }
                if($fila['Id_media'] == 8){
                    $imagen_carusel_3 = $fila['archivo_img'];
                    $desc3 = $fila['descripcion'];
                    }
                if($fila['Id_media'] == 10){
                    $imagen_carusel_4 = $fila['archivo_img'];
                    $desc4 = $fila['descripcion'];
                }
                if($fila['Id_media'] == 12){
                    $imagen_carusel_5 = $fila['archivo_img'];
                    $desc5 = $fila['descripcion'];
                }
            }
            while($fila=mysqli_fetch_array($resultadoimpresion))
            {
                
                if($fila['Id_info'] == 2){
                    echo 
                    "<div class='row g-0 bg-dark text-white position-relative shadow-lg p-3 mb-5 rounded'>
                        <div class='col-md-6 p-4 ps-md-1'>
                        <h4 class='text-center'><b>".$fila['Encabezado']."</b> </h4>
                        <p>".$fila['contenido']."</p></div>
                        <div class='col-md-6 mb-md-0 p-md-4 '>
                                <br>
                                <br>
                                <picture><img class='img-thumbnail img' src='".
                                    $imagen_inicio
                                    ."'alt='".$desc0."'>
                                </picture>
                        </div>
                    </div>";
                }
                if($fila['Id_info'] == 4){
                echo "<div class='col-xs-6 col-sm-12 col-md-16'>"
                        .$fila['contenido']
                        ."</div>";
                }
                if($fila['Id_info'] == 6){
                    $cont = $fila['contenido'];
                }
            }

?>
    </div>
</div>
<div class="container blockquote">
    <div class="blockquote">
        <b>Desarrollo:</b>
    </div>
    <div class="container">
        <p>En este documento se menciona 5 puntos a tomar en cuenta con respecto a
            las vulnerabilidades en las redes sociales.
        </p>
    </div>
    <section class="home">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"style="background-image:url('<?php echo $imagen_carusel_1;?>')">
                <div class="container">
                    <h2><?php echo $desc1;?></h2>    
                    <button type="button" class="btn btn-outline-light"><a href="tema1.php">Más</a></button>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('<?php echo $imagen_carusel_2;?>')">
                <div class="container">
                    <h2><?php echo $desc2;?></h2>    
                    <button type="button" class="btn btn-outline-light"><a href="tema2.php">Más</a></button>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('<?php echo $imagen_carusel_3;?>')">
                <div class="container">
                    <h2><?php echo $desc3;?></h2>    
                    <button type="button" class="btn btn-outline-light"><a href="tema3.php">Más</a></button>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('<?php echo $imagen_carusel_4;?>')">
                <div class="container">
                    <h2><?php echo $desc4;?></h2>    
                    <button type="button" class="btn btn-outline-light"><a href="tema4.php">Más</a></button>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('<?php echo $imagen_carusel_5;?>')">
                <div class="container">
                    <h2><?php echo $desc5;?></h2>    
                    <button type="button" class="btn btn-outline-light"><a href="tema5.php">Más</a></button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
</div>
<div class="container blockquote">
    <p><?php echo $cont;?></p>
    <center>
        <a href="login-usuario.php"><button type="button" class="btn btn-outline-dark">Actividades</button></a>
    </center>
    <br>
</div>
<?php
mysqli_close($link);
?>