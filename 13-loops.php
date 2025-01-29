<?php include 'includes/header.php';

//while
$i = 0;


echo 'while' . '<br>'; 
while($i < 10) {
    echo $i . '<br>';
    $i++;
}

//do while
echo 'do while' .'<br>';
$j = 0;
do{
    echo $j . '<br>';   
    $j++;
}
while($j < 10);

//for
echo 'for' .'<br>'; 
for($k = 0; $k < 100; $k++){
    if($k % 3 === 0 && $k % 5 === 0){
        echo $k . 'FizzBuzz' . '<br>';
    }elseif($k % 3 === 0){
        echo $k . 'Fizz' . '<br>';
    }elseif($k % 5 === 0){
        echo $k . 'Buzz' . '<br>';
    }else{
        echo $k . '<br>';
    }
}


include 'includes/footer.php';