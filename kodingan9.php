<?php

$angka = $_POST['angka'];
$faktorial = $_POST['angka'];

for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;

}

echo "Faktorial dari $angka adalah $faktorial";