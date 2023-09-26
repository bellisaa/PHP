<?php

if(!empty($_POST)){



$dados = $_POST['dados'];
$idade = $_POST['idade'];


echo $dados. "<br>" .$idade;

if($idade>=18){echo  "<br><h2> De maior!</h2>";}
else{echo  "<br> <h2>De menor!</h2>";}
}
else{header('location:form1.html');}

echo "<h1>Fim da simulação"


?>