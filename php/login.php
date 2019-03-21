<?php

session_start();

require_once 'dbConnection.php';
require 'functions.php';

$db = getdbConnection();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $credentials = getCredentials($db);
    var_dump($username);
    var_dump($password);
    var_dump($credentials);
    $checkedCredentials = checkCredentials($username, $password, $credentials);
    var_dump($checkedCredentials);
    if ($checkedCredentials == true) {
        $_SESSION['loggedIn']=true;
        header('Location: admin.php');
    }
}
?>

<html lang="en">
<head>
    <link rel='stylesheet' type='text/css' href='../css/normalize.css'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
    <title>Login</title>
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
