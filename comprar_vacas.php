<?php 
echo "\n";
echo "Vaca 1 ( Peso: 360 kg) (Produccion de leche por dia: 40 lts)\n";
echo "Vaca 2 ( Peso: 250 kg) (Produccion de leche por dia: 35 lts)\n";
echo "Vaca 3 ( Peso: 400 kg) (Produccion de leche por dia: 43 lts)\n";
echo "Vaca 4 ( Peso: 180 kg) (Produccion de leche por dia: 28 lts)\n";
echo "Vaca 5 ( Peso: 50 kg) (Produccion de leche por dia: 12 lts)\n";
echo "Vaca 6 ( Peso: 90 kg) (Produccion de leche por dia: 13 lts)\n";
echo "\n";

    $camion = 700;
    $c = 0;
    $a = 0;
    $b = 0;
    $peso = 0;
    $leche = 0;
    while ($a < $camion) {
        echo "\n";
        $val = readline('Ingrese el valor de la vaca a comprar  ');
        echo "\n";
        switch (intval($val)) {
            case 1:
                $peso = 360;
            $leche = 40;
            $a = $a + $peso;
            $b = $b + $leche ;
            $c++;
                break;
            case 2:
                $peso = 250;
            $leche = 35;
            $a = $a + $peso;
            $b = $b + $leche ;
            $c++;
                break;
            case 3:
                $peso = 400;
            $leche = 43;
            $a = $a + $peso;
            $b = $b + $leche ;
            $c++;
                break;
            case 4:
                $peso = 180;
            $leche = 28;
            $a = $a + $peso;
            $b = $b + $leche ;
            $c++;
                break;
            case 5:
                $peso = 50;
            $leche = 12;
            $a = $a + $peso;
            $b = $b + $leche ;
            $c++;
                break;
            case 6:
                $peso = 90;
                $leche = 13;
                $a = $a + $peso;
                $b = $b + $leche ;
                $c++;
                break;
            default :
            echo "\n";
            print('No existe esa opcion');
            echo "\n";
            break;
        }
        if($c === 4){
            break;
        }
    
    }

    if($a  <= $camion ){
        echo "\n";
            print('El peso es ideal para transportar sin problemas');
        echo "\n";
            print('El peso es  '.  $a.' kg');
        echo "\n";
            print('Su produccion de leche diaria es de  '.$b.' lts');
        echo "\n";
    }
    if($a  > $camion ){
        echo "\n";
            print('El peso no es el ideal para transportar');
        echo "\n";
            print('El peso es  '.  $a.' kg');
        echo "\n";
            print('Su produccion de leche diaria es de  '.$b.' lts');
        echo "\n";
    }
    
   
?>