<?php

// ---------- ESTRUTURAS DE CONTROLE ----------

// _____CONDICIONAIS_____

if (1 == 2) {
    echo "Verdadeiro";
} elseif (1 == 1) {
    echo "Elsif";
}
else {
    echo "Falso";
}


// _____REPETIÇÕES_____


// FOR NORMAL

$vetor = Array();
    $vetor[] = 1;
    $vetor[] = "segundo valor";
    $vetor[] = true;
    $v4 = 4;
    $vetor[] = "$v4 ° valor";

for ($i = 0; $i < sizeof($vetor); $i++){
    echo $vetor[$i]."<br>";
}


// FOREACH --> para valores que não são números

$arrayAssociativo = Array(  // inicia o array
    $arrayAssociativo['PHP'] = 'Ótima linguagem',
    $arrayAssociativo['Java'] = 'Nem tanto...',
    $arrayAssociativo['JS'] = 'Melhor do mundo',
);

foreach($arrayAssociativo as $chave => $valor){
    echo $chave."-".$valor."<br>";
}




?>