#!/usr/bin/php
<?php

echo "===========Pattern Substitution============\n";
$dictionary = array( "saya" => "0", "makan" => "b", "tahu" => "%", "dan" => "~", "sambal" => "^");

$kalimat = "saya makan tahu dan sambal";
$pisahin=explode(" ", $kalimat);
foreach($pisahin as $kata) {
  echo $dictionary[$kata];
}

?>
