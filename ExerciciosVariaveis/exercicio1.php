<?php

$vetor = Array();
$vetor[] = 1;
$vetor[] = "segundo valor";
$vetor[] = true;
$v4 = 4;
$vetor[] = "$v4 ° valor";


for ($i = 0; $i < 4; $i++) {  // ou: for($i = 0; $i < sizeof($vetor); $i++){
  echo $vetor[$i]."<br>";
}

?>