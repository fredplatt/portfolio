<?php

session_start();

require_once 'dbConnection.php';
require 'functions.php';

$db = getDbConnection();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $credentials = getCredentials($db);
    $checkedCredentials = checkCredentials($username, $password, $credentials);
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
