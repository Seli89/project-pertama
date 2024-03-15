<?php

$panjang = $_POST['angka'];
$angka_sebelumnya = $_POST['angka'];
$angka_sekarang = $_POST['angka'];

echo "Deret fibonacci: ";

for ($i = 0; $i < $panjang; $i++) {
    echo $angka_sebelumnya. " ";
    $tambah = $angka_sebelumnya + $angka_sekarang;
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $tambah;
}