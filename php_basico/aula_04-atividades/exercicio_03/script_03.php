<?php

if($_POST){
    $numero = $_POST["numero"];

$triplo = $numero * 3;
$metade = $numero /2;

echo "<h2>Resultados:</h2>";
echo "<p> O triplo de $numero é: $triplo</p>";
echo "<p> A metade de $numero é: $metade</p>";


}