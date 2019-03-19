<?php

function getAboutText($db) {
    $query = $db->prepare("SELECT `id`, `text` FROM `about`;");
    $query->execute();
    return $query->fetchAll();
}

function createParagraphs($getAboutText) {
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