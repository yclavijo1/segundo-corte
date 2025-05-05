<?php

//paso 1 
require "config/conex.php";

//paso 2 capturar variables
$cantidad = $_POST["txt_cantidad"];
$valor = $_POST["txt_valor"];
$total = $cantidad * $valor;

$sql="INSERT INTO ventas(cantidad, valor, total) VALUES (".$cantidad.", ".$valor.", ".$total.");

if(dbh->(sql))




?>