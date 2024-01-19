<?php
$luas = 25;

if ($luas > 0) {
    $sisi = sqrt($luas);
    echo "Luas persegi: " . $luas . " cm² <br>";
    echo "Panjang sisi: " . $sisi . " cm";
} else {
    echo "Luas harus lebih besar dari 0 untuk menghitung panjang sisi.";
}
?>
