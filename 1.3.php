<?php

$month = 2;
$year = 2020;

$dni = [31, 26, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

switch ($month){
    case 1:
        echo $dni[0];
        break;
    case 2:
        if ($year % 4 == 0){
            echo $dni[1] + 1;
        } else
            echo $dni[1];
        break;
    case 3:
        echo $dni[2];
        break;
    case 4:
        echo $dni[3];
        break;
    case 5:
        echo $dni[4];
        break;
    case 6:
        echo $dni[5];
        break;
    case 7:
        echo $dni[6];
        break;
    case 8:
        echo $dni[7];
        break;
    case 9:
        echo $dni[8];
        break;
    case 10:
        echo $dni[9];
        break;
    case 11:
        echo $dni[10];
        break;
    case 12:
        echo $dni[11];
        break;
    default:
        echo "Nieprawidłowy miesiąc";
        break;

}