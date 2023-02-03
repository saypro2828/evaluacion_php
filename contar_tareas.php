<?php 
    $archivo = file('tareas.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $arry = [];
    
	foreach ($archivo as $num=>$line)
{
    array_push($arry,explode(',',$line));
}
$tarea_tiempo = [$arry[3],$arry[4],$arry[5],$arry[6],$arry[7],$arry[8]];
$dependencias = [$arry[10],$arry[11], $arry[12]];

$val_1 = 0;
$val_2 = 0;
$val_3 = 0;
$val_4 = 0;
$val_5 = 0;
$val_6 = 0;
$tiempo_1 = [];
$tiempo_2 = [];
$tiempo_3 = [];

    foreach($dependencias as $t => $tarea){
        foreach($tarea as $td => $tar){
            if($tarea_tiempo[0][0] === $tar){
                $val_1 = $val_1 + intval($tarea_tiempo[0][1]);
            }
            if($tarea_tiempo[1][0] === $tar){
                $val_2 = $val_2 + intval($tarea_tiempo[1][1]);
            }
            if($tarea_tiempo[2][0] === $tar){
                $val_3 = $val_3 + intval($tarea_tiempo[2][1]);
            }
            if($tarea_tiempo[3][0] === $tar){
                $val_4 = $val_4 + intval($tarea_tiempo[3][1]);
            }
            if($tarea_tiempo[4][0] === $tar){
                $val_5 = $val_5 + intval($tarea_tiempo[4][1]);
            }
            if($tarea_tiempo[5][0] === $tar){
                $val_6 = $val_6 + intval($tarea_tiempo[5][1]);
            }
        }       
    } 

echo "\n";
echo 'Calculo de tiempo de todas las tareas segun las dependencias';
echo "\n";
echo "\n";
print_r($tarea_tiempo[0][0].','.$val_1);
echo "\n";
print_r($tarea_tiempo[1][0].','.$val_2);
echo "\n";
print_r($tarea_tiempo[2][0].','.$val_3);
echo "\n";
print_r($tarea_tiempo[3][0].','.$val_4);
echo "\n";
print_r($tarea_tiempo[4][0].','.$val_5);
echo "\n";
print_r($tarea_tiempo[5][0].','.$val_6);
echo "\n";

?>