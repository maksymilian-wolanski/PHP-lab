<body bgcolor="#ff959c">
</body>
<?php
session_start();
$_SESSION['login'] = 'admin';
$_SESSION['password'] = 'admin';

$ulogin = $_GET['login'];               //user login
$upassword = $_GET['password'];         //user password
$clogin = $_SESSION['login'];           //correct login
$cpassword = $_SESSION['password'];     //correct password

if ($ulogin == $clogin && $upassword == $cpassword){
    $_SESSION['login'] = '1';
    header('Location: http://szuflandia.pjwstk.edu.pl/~s24543/Zadania/4/zalogowano.php');
}
else{
    echo 'Wystąpił błąd.<br>';
    echo '<a href="3.php">Spróbuj ponownie</a>';
}

?>
