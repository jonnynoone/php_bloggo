<?php

/*
 * Format The Date
 */
function formatDate($date)
{
    return date('F j Y, g:i a', strtotime($date));
}

/*
 * Shorten The Text
 */
function shortenText($text, $chars = 450)
{
    if (strlen($text) > $chars) {
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
    }
    return $text;
}