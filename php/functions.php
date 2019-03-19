<?php

//This function retrieves the text to go in the About Me section.
//It also retrieves the ID in order to arrange paragraphs left/right.


function getAboutText($db) {
    $query = $db->prepare("SELECT `id`, `text` FROM `about`;");
    $query->execute();
    return $query->fetchAll();
}

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