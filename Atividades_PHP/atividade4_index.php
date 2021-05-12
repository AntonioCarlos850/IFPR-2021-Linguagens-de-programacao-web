<?php

$anjo = 0;

function somatorio($mes,$ano,$dia){

    $safadeza = 0;
    global $anjo;
    
    for ($mes; $mes > 0; $mes--) { 
        $safadeza +=$mes;
    }

    $safadeza = $safadeza + ($ano/100) * (50-$dia);
    $anjo = 100 - $safadeza;//OBS: acho que deveria ser $safadeza - 100 pois do jeito que está dá retorno negativo
                            //mas estou fazendo do jeito que está na atividade
}

require 'atividade4.php';