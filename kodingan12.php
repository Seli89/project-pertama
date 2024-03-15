<?php

$_POST['angka'];

function Jumlahkan($arr) {
    $total = 0;
    foreach ($arr as $nilai) {
        $total += $nilai;
    }
    return $total;

}

$angka = [1, 2, 3, 4, 5];
echo "Total: " . jumlahkan($angka);