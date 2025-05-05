<?php

$cantidad = $_POST["cantidad"];
$total = 1500*$cantidad;
if($total>5000){
    $des = $total*0.1;
    $total = $total - $des;
    
}
echo "el total a pagar es de ".$total. " Pesos";

?>