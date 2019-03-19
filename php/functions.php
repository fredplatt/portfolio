<?php

/*
 * This function retrieves the text to go in the About Me section. It also retrieves the ID in order to arrange paragraphs left/right.
 *
 * @param $db array - $db points to PDO into portfolio sql database.
 *
 * @return array the id and text fields from the 'about' table of database
 */


function getAboutText($db) {
    $query = $db->prepare("SELECT `id`, `text` FROM `about`;");
    $query->execute();
    return $query->fetchAll();
}

/*
 * createParagraphs uses array of IDs and strings to display text on front end. Each paragraph is classed left or right according to odd/even numbers to do alternating justification.
 *
 * @param $getAboutText array - $ is the return of getAboutText()
 *
 * @return string - contains html code for divs and paragraphs with classes to affect justification.
 */

function createParagraphs(array $getAboutText) {
    $result = '';
    foreach ($getAboutText as $text) {
        if ($text['id'] % 2 == 0) {
        $result .= '<div class="textRight"><p>'. $text['text'] .'</p></div>';
        } else {
            $result .= '<div class="textLeft"><p>'. $text['text'] .'</p></div>';
        }
    }
    return $result;
}