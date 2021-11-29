<?php
include 'encabezado.php';
include "conexion.php";
?>
<h1  align = center >ACTIVIDADES COMPLEMENTARIAS</h1>
<hr class='container linea' size=5>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetatert.js"></script>
<div class="containerA">
    <div class="card">
        <img src="imagenes/dat.gif">
            <h4>Datos personales en las redes sociales</h4>
            <p>¿Qué tan ágil eres para los cuestionarios? Responde las preguntas de opción múltiple con el menor tiempo posible.</p>
            <a href="act-tema1.php">Empezar</a>
    </div>
    <div class="card">
        <img src="imagenes/post.gif">
        <h4>Vulnerabilidades de datos en las redes sociales</h4>
        <p>¿Estas listo para encontrar las 8 Vulnerabilidades de datos en las redes sociales que se encuentran en la sopa de letras?</p>
        <a href="act-tema2.php">Empezar</a>
    </div>
    <div class="card">
        <img src="imagenes/giph.gif">
        <h4>Vulnerabilidades más altas</h4>
        <p>Adivina adivinador. Lee las pistas de la vulnerabilidad oculta, una vez entendido de cual se trata, responde correctamente.</p>
        <a href="act-tema3.php">Empezar</a>
    </div>  
</div>
<br>
<br>
<br>
<div class="containerA">
    <div class="card">
        <img src="imagenes/ac4.gif">
        <h4>Leyes mexicanas que protegen la privacidad de los datos en redes sociale</h4>
        <p>Dicen que la unión hace la fuerza. Refuerza tu conocimiento uniendo cada frase con su correspondiente.</p>
        <a href="act-tema4.php">Empezar</a>
    </div>
    <div class="card">
        <img src="imagenes/ac5.gif">
        <h4>Estadisticas del uso de las redes sociales en la actualidad</h4>
        <p>¿Crees poder vencer al tiempo? Arrastrar el recuerdo a su definición que le corresponde.</p>
        <a href="act-tema5.php">Empezar</a>
    </div>
</div>
<br>
<br>
<br>
<?php
mysqli_close($link);
?>
<?php
include 'pie.php';
?>