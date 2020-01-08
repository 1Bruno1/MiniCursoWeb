<?php

$array = Array(
'PIZZA' => "40 reais",
'HAMBURGUER' => "12 reais",
'YAKISOBA' => "13 reais",
'BATATA FRITA' => "20 reais",
);

foreach ($array as $chave => $valor){
    echo $chave." = ".$valor."<br>";
    echo "<br>";
}


?>