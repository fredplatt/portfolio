<?php

require 'dbConnection.php';
require 'functions.php';

$db = getdbConnection();

if (isset($_POST['editText'])) {
    $oldTextId = $_POST['editId'];
    $newText = $_POST['editedText'];
    editPara($db, $oldTextId, $newText);
}


if (isset($_POST['addText'])) {
    $addedText = $_POST['newContent'];
    addText($db, $addedText);
}

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
    <?php echo $textForm ?>
<form action="admin.php" method="post">
    <input class="paragraph" type="text" name="newContent" placeholder="Type new content in here">
    <input class="button" type="submit" name="addText">
</form>
</body>
</html>