<?php
    $numero=$_POST['numero'];
    $multiplicacion=0;

    for($i=0; $i<=10;$i++){
        $multiplicacion=$numero*$i;
        echo $numero." x ".$i." = ".$multiplicacion."<br>";
        
    }

?>
