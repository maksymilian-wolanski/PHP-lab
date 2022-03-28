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
            <TD>a:</TD>
            <TD><INPUT name="a"></TD>
        </TR>
        <TR>
            <TD>b:</TD>
            <TD><INPUT name="b"></TD>
        </TR>
        <label for="działanie">Działanie: </label>

        <select name="c" id="działanie">
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">*</option>
            <option value="3">/</option>
        </select>
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
$b = $_GET['b'];
$c = $_GET['c'];
echo ("Wynik: ");
if ($b == 0 && $c == 3){
    echo ("Nie dzielimy przez 0");
}
else{
    switch ($c) {
        case '0':
            echo $a + $b;
            break;
        case '1':
            echo $a - $b;
            break;
        case '2':
            echo $a * $b;
            break;
        case '3':
            echo $a / $b;
            break;
    }
}
?>
