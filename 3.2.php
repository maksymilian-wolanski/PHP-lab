<!DOCTYPE html>
<html>
<head>
    <meta charset=""UTF-8">
    <title>Tytuł</title>
</head>

<body>

<a href="http://szuflandia.pjwstk.edu.pl/~s24543/Zadania/3/">Powrót do zadań</a>
<br>
<br>

<form action="" method="get">
    <TABLE>
        <TR>
            <TD>Liczba do sprawdzenia czy jest pierwsza:</TD>
            <TD><INPUT name="a"></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" value="Oblicz"></TD>
        </TR>
    </TABLE>
</form>

</body>
</html>
<?php
$a = $_GET['a'];
$i = 2;
$count = 0;
$cond = true;
while ($i ** 2 <= $a){
    $count ++;
    if ($a % $i == 0){
        echo nl2br("Liczba nie jest pierwsza\nLiczba wykonancyh pętli: ");
        $cond = false;
        break;
    }
    $i ++;
}
if ($cond == true){
    echo nl2br("Liczba jest pierwsza\nLiczba wykonanych pętli: ");
}
echo $count;
?>
