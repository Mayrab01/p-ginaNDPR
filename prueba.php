<?php
include "encabezado.php";
include "conexion.php";
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
                    <h1  align = center >".$fila['Encabezado_AC']."</h1>
                    <hr class='container linea' size=5>
                    <div class='container blockquote'>
                    <br>".$fila['url_AC']."<br>
                    <br>
                    </div>";
                }
            }
?>
<center>
  <a href='Inicio.php'><button type='button' class='btn btn-outline-dark'>Regresar</button></a>
</center>
<br>
<?php
mysqli_close($link);
?>
<?php
include "pie.php";
?>