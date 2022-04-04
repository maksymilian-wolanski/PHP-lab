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
        <label for="kraj">Kraj: </label>

        <select name="kraj" id="kraj">
            <option value="0">Niemcy - 15 zł / dobę</option>
            <option value="1">Hiszpania - 27 zł / dobę</option>
            <option value="2">Grecja - 24 zł / dobę</option>
            <option value="3">Turcja - 23 zł / dobę</option>
        </select>

        <br>

        <label for="pocz">Początek pobytu: </label>
        <input type="date" id="pocz" name="pocz" value="2022-03-28" min="2022-03-28" max="2023-03-28">

        <br>

        <label for="kon">Koniec pobytu: </label>
        <input type="date" id="kon" name="kon"  value="2022-03-28" min="2022-03-28" max="2023-03-28">

        <TR>
            <TD>Ilość osób:</TD>
            <TD><INPUT type="number" name="num"></TD>
        </TR>

        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" value="Sprawdź"></TD>
        </TR>
    </TABLE>
</form>

</body>
</html>
<?php
$start = $_GET['pocz'];
$stop = $_GET['kon'];
$kraj = $_GET['kraj'];
$osoby = $_GET['num'];
function daysBetween($dt1, $dt2) {
    return date_diff(
        date_create($dt2),
        date_create($dt1)
    )->format('%a');
}
$diff = daysBetween($start, $stop);

if ($start > $stop){
    echo "Błąd daty";
}
else{
    switch ($kraj) {
        case 0:
            echo $diff * $osoby * 15;
            break;
        case 1:
            echo $diff * $osoby * 27;
            break;
        case 2:
            echo $diff * $osoby * 24;
            break;
        case 3:
            echo $diff * $osoby * 23;
            break;
    }
}

?>
