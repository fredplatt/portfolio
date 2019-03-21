<?php

/**
 * This function retrieves the text to go in the About Me section. It also retrieves the ID in order to arrange paragraphs left/right.
 *
 * @param $db array - $db points to PDO into portfolio sql database.
 *
 * @return array the id and text fields from the 'about' table of database
 */
function getAboutText(PDO $db):array {
    $query = $db->prepare("SELECT `id`, `text` FROM `about` WHERE `deleted` = 0;");
    $query->execute();
    return $query->fetchAll();
}

/**
 * createParagraphs uses array of IDs and strings to display text on front end. Each paragraph is classed left or right according to odd/even numbers to do alternating justification.
 *
 * @param $getAboutText array - $ is the return of getAboutText()
 *
 * @return string - contains html code for divs and paragraphs with classes to affect justification.
 */
function createParagraphs(array $getAboutText):string {
    $result = '';
    foreach ($getAboutText as $aboutMeText) {
        if ($aboutMeText['id'] % 2 == 0){
            $result .= '<div class="textRight"><p>'. $aboutMeText['text'] .'</p></div>';
        } else {
            $result .= '<div class="textLeft"><p>'. $aboutMeText['text'] .'</p></div>';
        }
    }
    return $result;
}

/**
 * createTextForm puts a textarea on the admin page for each paragraph being displayed on homepage. It fills it with the para text so you can edit it and then submit your edits or delete the para altogether.
 *
 * @param array $retrieveText is the return of getAboutText()
 *
 * @return string contains html to create form with embedded php to display text from database.
 */
function createTextForm(array $retrieveText):string {
    $result = '';
    foreach ($retrieveText as $displayText) {
        $result .= '<form id="editForm" action="admin.php" method="post"><textarea class="paragraph" name="editedText">' . $displayText['text'] . '</textarea><input type="hidden" name="editId" value="' . $displayText['id'] . '"/><input class="button" type="submit" name="editText" value="Submit edit"><input class="button" type="submit" name="delText" value="Delete"></form>';
    }
    return $result;
}

/**
 * editPara uses textarea containing current text to submit edits to the text displayed.
 *
 * @param PDO $db connects to database
 *
 * @param string $oldTextId gets id number from hidden input
 *
 * @param string $newText is the submit of what the textarea contains
 *
 * @return mixed executes the query to update the text field on database.
 */
function editPara(PDO $db, string $oldTextId, string $newText) {
    $query = $db->prepare("UPDATE `about` SET `text` = :newText WHERE `id` = :editId");
    $query->bindParam(':editId', $oldTextId);
    $query->bindParam(':newText', $newText);
    return $query->execute();
}

/**
 * addText uses bottom textarea to submit new content to the database which is then displayed on front end.
 *
 * @param PDO $db connects to database
 *
 * @param string $addedText gets new text from form
 *
 * @return mixed returns the ID of the last insertion
 */
function addText(PDO $db, string $addedText) {
    $query = $db->prepare("INSERT INTO `about` (`text`) VALUES (:addText)");
    $query->bindParam(':addText', $addedText);
    $query->execute();
    return $db->lastInsertId();
}

/**
 * delText puts a deleted flag on that line in the db. Other functions then hide it from admin and front end.
 *
 * @param PDO $db connects to database
 *
 * @param string $oldTextId gets id number from hidden input
 *
 * @return bool executes the query to update the deleted field on database.
 */
function delText(PDO $db, string $oldTextId) {
    $query = $db->prepare("UPDATE `about` SET `deleted` = 1, `id` = `id` + (SELECT MAX(`id`)) WHERE `id` = :editId");
    $query->bindParam(':editId', $oldTextId);
    return $query->execute();
}