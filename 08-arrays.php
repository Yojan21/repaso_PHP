<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];
// Util para ver los contenidos de un array
echo '<pre>';
var_dump($carrito);
echo '</pre>';
//Acceder a un elemento del array
echo $carrito[1];

$carrito[3] = 'Telefono';
echo '<pre>';
var_dump($carrito);
echo '</pre>';

//Añadir elementos al final del array
array_push($carrito, 'Audifonos');
echo '<pre>';
var_dump($carrito);
echo '</pre>';

//Añadir elementos al inicio del array
array_unshift($carrito, 'Smartwatch');
echo '<pre>';
var_dump($carrito);
echo '</pre>';


include 'includes/footer.php';