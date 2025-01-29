<?php 
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $num1 = 0, int $num2 = 0){
    echo $num1 + $num2;
}

sumar(2, 5);
echo '<pre>';
sumar(10, 30);
echo '<pre>';

function restar(int $n1, int $n2){
    return $n1 - $n2;
}

$rest = restar(30, 10);
echo $rest;

include 'includes/footer.php';