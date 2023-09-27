<?php

$numero = $_POST['numero'];
echo $numero;

if($numero>=0){
    echo "<br><h2> Positivo</h2>";
}
else{
    echo "<br><h2>Negativo</h2>";
}

/*<form action="script_ex02.php" method="get">
        
        <label for="numero">numero:</label>
        <input type="text" name="numero" id="">
    
        <input type="submit" value="Enviar">
    </form>*/

?>