#!/usr/bin/php
<?php

echo "========Dekompresi Substitution=======\n";
$dictionary = array("0" => "saya", "b" => "makan", "%" => "tahu", "~" => "dan", "^" => "sambal");

$kompres = "0b%~^";
$pisahKarakter = str_split($kompres);
$dekompres = "";
foreach ($pisahKarakter as $karakter) {
    $dekompres .= isset($dictionary[$karakter]) ? $dictionary[$karakter] . " " : $karakter;
}

$dekompres = rtrim($dekompres);
echo $dekompres . "\n";

?>
