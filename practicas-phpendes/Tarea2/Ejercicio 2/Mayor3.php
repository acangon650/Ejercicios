<?php
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $numero3=$_POST['numero3'];

    if($numero1>$numero2 && $numero1>$numero3){
        echo "El numero ".$numero1. " es el mayor";
    }else if($numero2>$numero1 && $numero2>$numero3){
        echo "El numero ".$numero2. " es el mayor";
    }else{
        echo "El numero ".$numero3. " es el mayor";
    }
?>
