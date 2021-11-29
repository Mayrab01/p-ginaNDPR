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
                if($fila['Id_AC']==6){
                    echo "
                    <div class='container blockquote'>
                    <h1  align = center >".$fila['Encabezado_AC']."</h1>
                    <hr class='container linea' size=5>
                    <br>".$fila['url_AC']."
                        <br>
                        <center>
                            <a href='ActividadesCon.php'><button type='button' class='btn btn-outline-dark'>Regersar</button></a>
                        </center>
                        <br>
                    </div>";
                }
            }
?>
<?php
include "pie.php";
?>