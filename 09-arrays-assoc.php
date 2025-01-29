<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Yojan',
    'saldo' => 1000,
    'tipo' => 'Premium'
];
echo '<pre>';
var_dump($cliente);
echo '</pre>';
echo $cliente['nombre'];

$cliente['codigo'] = 1234;
echo '<pre>';
var_dump($cliente);
echo '</pre>';
include 'includes/footer.php';