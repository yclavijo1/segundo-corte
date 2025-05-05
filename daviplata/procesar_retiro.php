<?php
//1 paso
require "config/conex.php";

//paso 2 capturar variables
$valor =$_POST["txt_valor"];
$id_logueado = 1;

//paso 3 armar sql
$sql= "INSERT INTO `transacciones`(tipo_transaccion, value, user_origen, user_destino) VALUES (2, ".$valor.", ".$id_logueado.", 0)";

$sql2= "UPDATE usuario 
SET
saldo=(saldo-".$valor.") 
WHERE 
id = 1 ";

//paso 4
if($dbh->query($sql))
{
    echo "transaccion registrada exitosamente";
}else{
    echo"error registrando transaccion";
}

//paso 4
if($dbh->query($sql2))
{
    echo "<br>saldo actualizado exitosamente";
}else{
    echo"<br>error actualizando saldo";
}

?>