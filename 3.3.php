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
        <input type="date" id="pocz" name="trip-pocz" value="2022-03-28" min="2022-03-28" max="2023-03-28">

        <br>

        <label for="kon">Koniec pobytu: </label>
        <input type="date" id="kon" name="trip-kon"  value="2022-03-28" min="2022-03-28" max="2023-03-28">

        <TR>
            <TD>Ilość osób:</TD>
            <TD><INPUT num="num"></TD>
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
$start = $_GET['trip-pocz'];
$stop = $_GET['trip-kon'];
echo (($stop - $start) / (60*60*24));
?>
