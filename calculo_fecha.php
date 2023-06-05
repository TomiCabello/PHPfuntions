<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
if (isset($_GET['cargar'])){
    if(
        strlen($_GET['dia']) >= 1 && 
        strlen($_GET['mes']) >= 1 && 
        strlen($_GET['anio']) >= 1
    )   {
        
            $DD = trim($_GET['dia']);    
            $MM = trim($_GET['mes']);    
            $AAAA = trim($_GET['anio']);

            if(strtotime("$DD-$MM-$AAAA") < strtotime(date("d-m-Y")) ){
                header("Location: unidad2.php?error=bad");
            }else{
                $calculo = calculo_dias($DD,$MM,$AAAA);
                header("Location: unidad2.php?dias=".$calculo);
                
            }

        }
}

function calculo_dias($DD,$MM,$AAAA){
            $fecha_actual=date("d-m-Y");
            $fecha_elegida="$DD-$MM-$AAAA";
            $seg_entre_fechas=strtotime($fecha_actual)-strtotime($fecha_elegida);
            $dias_entre_fechas = abs($seg_entre_fechas) / (60*60*24);
            
return $dias_entre_fechas;
}

?>