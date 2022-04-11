<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tytuł</title>
</head>
<body>
<a href="http://szuflandia.pjwstk.edu.pl/~s24543/Zadania/4/">Powrót do zadań</a>
<br>
<br>
<table>
    <form action="2.php" method="get">

        <?php

        $tab[0] = ['nazwa'=>'Informacje', 'link'=>'0', 'tresc'=>'Tutaj znajdziesz informacje...'];
        $tab[1] = ['nazwa'=>'Często zadawane pytania', 'link'=>'1', 'tresc'=>'Najczęstsze pytania...'];
        $tab[2] = ['nazwa'=>'Strona główna', 'link'=>'2', 'tresc'=>'Witaj na stronie'];

        $menu = $_GET['menu'];
        if (isset($_GET['menu'])==false){$menu=2;}
        if ($menu<0 || $menu>2){echo 'błąd';}
        echo '<h1>'.$tab[$menu]['nazwa'].'</h1>';
        echo $tab[$menu]['tresc'];

        for ($i=0;$i<3;$i++)
        {
            echo '<li>';
            echo '<a href=2.php?menu=';
            echo $tab[$i]['link'];
            echo '>';
            echo $tab[$i]['nazwa'];
            echo '</a>';
            echo '</li>';
        }

        ?>

    </form>
</table>
</body>
</html>

