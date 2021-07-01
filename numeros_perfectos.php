<?php


/**
 * Funcion para saber si un numero es perfecto
 *
 * @param int $n
 *
 * @return boolean
 */



function esPerfecto($n)
{
    if($n>=0 && $n<=1000){
        // se pone el rango de numeros para listar
    $sumatorio=0;
    for ($i=1; $i<$n; $i++) {
        if ($n%$i==0) {
            $sumatorio+=$i;
        }
    }
    return $sumatorio==$n;
}else{
    echo "estas fuera de rango";
}
}


//funcion para listar los numeros perfectos
function listadoNumerosPerfectos($n)
{
    // se pone el rango de numeros para listar
    if($n>=0 && $n<=1000){
    // se recorre los numeros para saber si son divisores
    for ($i=1; $i<=$n; $i++) {
        if (esPerfecto($i)) {
            echo "<br>$i es un número perfecto";
        }
        // al descomentarlo se podrá visualizar los no perfectos
       // else{
          //  echo "<br>$i no es un número perfecto";
       // }
    }
}else{
    echo "estas fuera de rango";
    


}
}

$numero = $_GET["numero"];
listadoNumerosPerfectos($numero);

