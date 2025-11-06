<?php

$num1=$_GET['n1'];
$num2=$_GET['n2'];

function dividir($num1, $num2){
    try{
        if(!$num==0){
           echo "El resultado de la división es: " .($num1/$num2);
        }
        else throw new Exception ("No se puede dividir por 0");
    }
    catch(Exception $e){
        $e->getMessage();
    }
}