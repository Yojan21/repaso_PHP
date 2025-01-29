<?php include 'includes/header.php';

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

foreach($clientes as $cliente){
    echo $cliente . '<br>';
}

echo count($clientes) . '<br>';

$cliente = [
    'nombre' => 'Yojan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $key => $valor){
    echo $key . ' ' . $valor . '<br>';
}


$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'TV 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 500,
        'disponible' => false
    ],
];

foreach($productos as $producto){ ?>
    <li>
        <p> Producto: <?php echo $producto['nombre']; ?> </p>
        <p> Precio: <?php echo  '$ ' . $producto['precio']; ?> </p>
        <p> <?php echo ($producto['disponible']) ? 'Disponible': 'No disponible'; ?> </p>
    </li>
    <?php

}

include 'includes/footer.php';