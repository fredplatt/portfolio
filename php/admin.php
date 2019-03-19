<?php

require 'dbConnection.php';
require 'functions.php';

$db = getdbConnection();

$editPara = $_POST['editPara'];
$newContent = $_POST['newContent'];
$oldTextId = $_POST['oldTextId'];
$newText = $_POST['editText'];
$retrieveText = getAboutText($db);
$textForm = createTextForm($retrieveText);

?>

<html lang="en">
<head>
    <link rel='stylesheet' type='text/css' href='../css/normalize.css'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
    <title>Admin</title>
</head>
<body>
<h1>HI FRED</h1>
<h3>Edit 'About Me' Section</h3>

<form id="form" action="admin.php" method="post">
<?php echo $textForm ?>
</form>

<!---->
<!--<form action="admin.php" method="post">-->
<!--    <input class="paragraph" name="oldTextId" type="text" placeholder="text to edit, there will be one of these inputs per paragraph on main page. Php to come">-->
<!--    <input class="button" type="submit" name="editText" value="Edit">-->
<!--    <input class="button" type="submit" name="delete" value="Delete">-->
<!--</form>-->
<form action="admin.php" method="post">
    <input class="paragraph" type="text" name="newContent" placeholder="New text to be added, php to come">
    <input class="button" type="submit">
</form>
</body>
</html>