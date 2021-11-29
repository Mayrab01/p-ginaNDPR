
<?php
include "encabezado.php";
include 'conexion.php';
?>
<?php
//////////////////////////////////////////(INFORMACION_BD)///////////////////////////////////////////////////////////////
            $imprimetabla="SELECT*FROM actividades;";
            $resultadoimpresion=mysqli_query($link,$imprimetabla);
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////(OBTENCION DE ACTIVIDADES EN BD)////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////
            while($fila=mysqli_fetch_array($resultadoimpresion))
            {
                if($fila['Id_AC']==2){
                    echo "
                    <title>Sopa de letras</title>
                    <h1 align = center >".$fila['Encabezado_AC']."</h1>
                    <hr class='container linea' size=5>
                    <div class='container'>
                        <center>
                            <div class='ratio ratio-16x9'>".$fila['url_AC']."</div>
                        </center>
                    </div>
                    <br>
                        <center>
                            <a href='ActividadesCon.php'><button type='button' class='btn btn-outline-dark'>Regersar</button></a>
                        </center>
                    <br>";
                }
            }
?>
<?php
include "pie.php";
?>