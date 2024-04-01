#!/usr/bin/php
<?php

echo "=======****RLE DECOMPRESSION****=======\n";
$input = "A1B7C4DE11F2";

function decompress($input)
{
    $output = '';
    $length = strlen($input);
    $i = 0;
    while ($i < $length) {
        $char = $input[$i];
        $i++;
        $count = '';
        while ($i < $length && is_numeric($input[$i])) {
            $count .= $input[$i];
            $i++;
        }
        $count = ($count === '') ? 1 : (int)$count;
        $output .= str_repeat($char, $count);
    }
    return $output;
}

echo "Dekompresi: " . decompress($input) . "\n";
?>
