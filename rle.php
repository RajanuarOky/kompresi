#!/usr/bin/php
<?php

echo "=======****RLE COMPRESSION****=======\n";
$input = "ABBBBBBBCCCCDEEEEEEEEEEFF";

/* Langkah memisahkan tiap karakter */
$kar = str_split($input);
$karakter = array_unique($kar);

function hitung($semua, $huruf)
{
    $jumlah = array();
    foreach ($semua as $hurufnya) {
        if ($huruf == $hurufnya) {
            $jumlah[] = $hurufnya;
        }
    }
    return count($jumlah);
}

foreach ($karakter as $huruf) {
    $jumlahHuruf = hitung($kar, $huruf);
    if ($jumlahHuruf >= 4) {
        echo $huruf;
        echo $jumlahHuruf;
    } else {
        for ($i = 0; $i < $jumlahHuruf; $i++) {
        echo $huruf;
        }
    }
}
?>
