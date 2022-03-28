<!DOCTYPE html>
<html>
<head>
    <meta charset=""UTF-8">
    <title>Tytuł</title>
</head>

<body>

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
        <TR>
            <TD>Działanie (+ - * /):</TD>
            <TD><INPUT name="c"></TD>
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
$b = $_GET['b'];
$c = $_GET['c'];
echo ("Wynik: ");
switch ($c){
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo $a / $b;
        break;
}
?>
