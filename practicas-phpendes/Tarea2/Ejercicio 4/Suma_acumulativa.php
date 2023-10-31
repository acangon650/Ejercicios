<?php
    $numero=$_POST['numero'];
    $suma=0;

    for($i=0; $i<=$numero;$i++){
        $suma=$suma+$i;
    }

    echo "La suma es: ".$suma;
?>
