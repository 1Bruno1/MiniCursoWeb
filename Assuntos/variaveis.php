<?php

// ----- TODA VARIÁVEL COMEÇA COM: $ -----


// STRING

$texto = "Eu sou um texto";


// NUMERO

$numero = 1;
$outroNumero = 3.14;  // os números podem ser de qualquer tipo, inteiro, real, etc.
$soma = $numero + $outroNumero;  // 1 + 3.14 = 4.14


// ARRAYS

$arrayNormal[] = Array();  // inicia o array
    $arrayNormal[] = 1;
    $arrayNormal[] = "Segundo valor";  // o array junta qualquer tipo de variável, string, número, etc.


// ARRAY ASSOCIATIVO

$arrayAssociativo = Array(  // inicia o array
    $arrayAssociativo['PHP'] = 'Ótima linguagem',
    $arrayAssociativo['Java'] = 'Nem tanto...',
    $arrayAssociativo['JS'] = 'Melhor do mundo',
);  


// OUTRO ARRAY

$outroarray = Array(
    "chave" => "valor",
    "chave2" => 2,
    "chave3" => 3.14,
    "chave4" => $numero,
);


// BOOLEAN

$bool = true;
$outroBool = false;

$nula = null; // 0 é considerado a mesma coisa que nulo

?>