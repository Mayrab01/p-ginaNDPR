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
                if($fila['Id_AC']==10){
                    echo "
                    <div class='container'>
                    <h1  align = center >".$fila['Encabezado_AC']."</h1>
                    <hr class='container linea' size=5>
                    <center><div class='ratio ratio-16x9'>
                    <iframe src='".$fila['url_AC']."' width='900' height='580' frameborder='0' allowfullscreen></iframe>
                    </div></center>
                    <br>
                    <center>
                        <a href='ActividadesCon.php'><button type='button' class='btn btn-outline-dark'>Regersar</button></a>
                    </center>
                    </div>";
                }
            }
?>
<br>
<?php
include "pie.php";
?>