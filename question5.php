<?php
function charCalculate($word)
{
    $character = [];
    $wordSplit = str_split($word);
    foreach ($wordSplit as $char) {
        if (!isset($character[$char])) {
            $character[$char] = 0;
        }
        $character[$char]++;
    }
    arsort($character);
    $character = array_slice($character, 0, 1);
    foreach ($character as $char => $time) {
        echo $char . " " . $time . "x\n";
    }
}

$word = "strawberry";
charCalculate($word);
