<?php include 'includes/header.php';

$nombreCliente = 'Yojan';
echo strlen($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo $texto;

// Convertir a mayusculas
echo strtoupper($nombreCliente);

//Convertir a minusculas
echo strtolower($nombreCliente);
include 'includes/footer.php';

//Revisar si un str existe o no
echo strpos($nombreCliente, 'Yojan');

//Concatenar strings
$tipoCliente = 'Premium';
echo 'El cliente' . $nombreCliente . ' es: ' . $tipoCliente;
echo "El cliente $nombreCliente es: $tipoCliente";
