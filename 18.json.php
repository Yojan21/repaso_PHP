<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 500,
        'disponible' => false
    ],
];

echo '<pre>';
echo var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Lo convierte a str

$json_array = json_decode($json); // Lo convierte de str a array

echo var_dump($json);
echo '<pre>';


include 'includes/footer.php';