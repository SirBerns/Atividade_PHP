<?php

function somar($valor1, $valor2){
    return $valor1 + $valor2;
}

function homemIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

function mulherIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

function jogoAdivinha($numeroR){
    return $numeroR(random_int(1, 10));
}

?>