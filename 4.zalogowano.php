<body bgcolor="#fff0d0">
</body>
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('Location: "3.php"');
}
echo 'Pomyślnie zalogowano!<br>';
echo '<a href="3.php">Wyloguj</a>'
?>
