<?php
/**
 * Created by IntelliJ IDEA.
 * User: etuncay
 * Date: 15/04/2017
 * Time: 21:19
 */


function smilarLevenshteinWords($word)
{
    $words = array();
    for ($i = 0; $i < strlen($word); $i++) {
        // insertions
        $words[] = substr($word, 0, $i) . '_' . substr($word, $i);
        // deletions
        $words[] = substr($word, 0, $i) . substr($word, $i + 1);
        // substitutions
        $words[] = substr($word, 0, $i) . '_' . substr($word, $i + 1);
    }
    // last insertion
    $words[] = $word . '_';
    return $words;
}

print_r(smilarLevenshteinWords('Sakaray Üniversitesi'));
