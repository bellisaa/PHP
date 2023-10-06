<?php

if (!empty($_POST)){

    $_numero = $_POST['numero'];

    echo "20% de ".$_numero." é ".$_numero*0.2;
    echo "<br>";
    echo "80% de ".$_numero." é ".$_numero*0.8;
    echo "<br>";
    echo "20% de ".$_numero." é ".$_numero*2;

} else{
    header('location: atividade4.html');
}

?>