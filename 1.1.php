<?php

$triangle = [4, 3, 5];

sort($triangle);

var_dump($triangle);

echo "<br />";
if ($triangle[0] ** 2 + $triangle[1] ** 2 == $triangle[2] ** 2){
    echo "Trzy podane liczby spełniają twierdzenie Pitagorasa.";
} else{
    echo "Trzy podane liczby nie spełniają twierdzenia Pitagorasa.";
}