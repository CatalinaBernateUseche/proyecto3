<?php
$celular = $_POST["celular"];
$valor= $_POST["valor"];
$contra = $_POST["pin"];

//echo "el pin digitado fue: ";
//echo $pin;
//echo "el valor fue: ".$valor;

$pin = "5555";
 
if($contra == $pin and $valor >1000)
{
    echo "transferencia exitosa";
}else{
    echo "transferencia fallida";
}



?>