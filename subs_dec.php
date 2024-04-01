#!/usr/bin/php
<?php

echo "===========Dekompresi============\n";
$dictionary = array( "0" => "saya", "b" => "makan", "%" => "tahu", "~" => "dan", "^" => "sambal");

$kata_terkompresi = "0b%~^";
$pisahin = explode(" ", $kata_terkompresi);
foreach($pisahin as $kata) {
  echo $dictionary[$kata] . " ";
}

?>
