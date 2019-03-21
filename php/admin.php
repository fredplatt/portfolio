<?php

require_once 'dbConnection.php';
require 'functions.php';

$db = getdbConnection();

if (isset($_POST['editText'])) {
    $oldTextId = $_POST['editId'];
    $newText = $_POST['editedText'];
    $trimmedText = trimWhiteSpace($newText);
    $checkedText = checkIfEmpty($trimmedText);
    if ($checkedText) {
        editPara($db, $oldTextId, $trimmedText);
    }
}

if (isset($_POST['addText'])) {
    $addedText = $_POST['newContent'];
    $trimmedText = trimWhiteSpace($addedText);
    $checkedText = checkIfEmpty($trimmedText);
    if ($checkedText) {
        addText($db, $trimmedText);
    }
}

if (isset($_POST['delText'])) {
    $oldTextId = $_POST['editId'];
    delText($db, $oldTextId);
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