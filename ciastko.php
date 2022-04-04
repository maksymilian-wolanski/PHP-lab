<?php
$shape = $_POST['shape'];
setcookie("vote", $shape, time() + (5), "/");
?>

<html>
<body>

<?php
if(!isset($_COOKIE["vote"])) {
    echo "Dziękujemy za zagłosowanie na ".$shape."!";
}
else {
    echo "Nie możesz zagłosować dwa razy w tej ankiecie.";
}
?>

</body>
</html>