<?php

session_start();

require 'dbConnection.php';
require 'functions.php';

$userName = 'fred';
$password = 'password';

if ($_POST['userName'] == $userName && $_POST['password'] == $password) {
    $_SESSION['loggedIn']=true;
    header('Location: admin.php');
} else if ($_SESSION['loggedIn']) {
    header('Location: admin.php');
}
?>

<html lang="en">
<head>
    <link rel='stylesheet' type='text/css' href='../css/normalize.css'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
    <title>Admin</title>
</head>
<body>
<h1>Please Log In</h1>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input class="button" type="submit" name="submit">
</form>
</body>
</html>
