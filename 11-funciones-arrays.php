<?php include 'includes/header.php';

//Buscar elementos en un arreglo
$carrito = ['Tablet', 'Television', 'Computadora', 'Celular'];

var_dump(in_array('Tablet', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); //Ordena de menor a mayor
rsort($numeros); //Ordena de mayor a menor


echo "<pre>";
var_dump($numeros); 
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente); //Ordena por valores
ksort($cliente); //Ordena por llaves
krsort($cliente); //Ordena por llaves en orden inverso

echo "<pre>";
var_dump($cliente); 
echo "</pre>";

include 'includes/footer.php';