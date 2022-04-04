<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tytuł</title>
</head>
<body bgcolor="#fff0d0">
<?php session_destroy() ?>
<a href="http://szuflandia.pjwstk.edu.pl/~s24543/Zadania/4/">Powrót do zadań</a>
<br>
<br>
<form action="logowanie.php" method="get">
    <table>
        <tr>
            <td>Login:</td>
            <td><input name="login"></td>
        </tr>
        <tr>
            <td>Hasło:</td>
            <td><input name="password"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Zaloguj"></td>
        </tr>
    </table>
</form>
</body>
</html>

