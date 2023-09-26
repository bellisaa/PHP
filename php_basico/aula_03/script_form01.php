<?php

$valor = $_GET['valor'];
$produto = $_GET['produto'];
echo $produto. " R$ " .$valor;

if($valor>=200){echo  "<br><h2> Produto Caro</h2>";}

?>