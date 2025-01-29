<?php include 'includes/header.php';

$autentuicado = true;
$admin = false;

if($autentuicado || $admin) {
    echo "El usuario esta autenticado";
} else {
    echo "El usuario no esta autenticado";
}

//if anidados
$cliente = [
    'nombre' => 'Yojan',
    'saldo' => 2000,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

if(!empty($cliente)) {
    echo "El arreglo tiene contenido";
    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "No tiene saldo";
    }
} else {
    echo "El arreglo esta vacio";
}

//else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "No tiene saldo";
}
echo "<br>";
//switch
$tecnologia = 'PHP';

switch($tecnologia){
    case 'PHP':
        echo "Desarrollo web con PHP";
        break;
    case 'JavaScript':
        echo "Desarrollo web con JavaScript";
        break;
    case 'HTML':
        echo "Desarrollo web con HTML";
        break;
    default:
        echo "Desarrollo web";
        break;
}


include 'includes/footer.php';