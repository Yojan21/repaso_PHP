<?php include 'includes/header.php';

$numero1 = 10;
$numero2 = 20;
$numero3 = 20;
$numero4 = '10';

var_dump($numero1 > $numero2);
echo '<br>';
var_dump($numero1 < $numero2);
echo '<br>';
var_dump($numero1 >= $numero2);
echo '<br>';
var_dump($numero1 <= $numero2);
echo '<br>';
var_dump($numero1 == $numero4);
echo '<br>';
var_dump($numero1 === $numero4);
echo '<br>';
var_dump($numero1 <=> $numero2);
echo '<br>';

include 'includes/footer.php';