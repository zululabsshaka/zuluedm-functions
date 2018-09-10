<?php
//to call this function simple use replaceTag('style, '</p><div style="padding:7px; font-size: 14px;"', 'style="font-size: 18px; font-family: inherit;"');
/**
 * @param $tagType = What CSS or HTML tag to replace
 *  - style | font-family
 * @param $strToR = the string to search
 * @param $strConR = string to replace it with '' is fine
 */

function replacesTag($tagType, $strToR, $strConR) {

    if ($tagType == 'style') {
        $strTreturn = preg_replace('/style="\/?(.*)(.|\\s)*?;/mi', $strConR, $strToR);
        return $strTreturn;
    } elseif ($tagType == 'font-family') {
        $strTreturn = preg_replace('/font-family:\/?(.|\\s)*?;/mi', $strConR, $strToR);
        return $strTreturn;
    } else {
        return  "";

    }
}
?>