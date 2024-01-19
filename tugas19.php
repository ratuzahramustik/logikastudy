<?php
// Inisialisasi variabel hasil
$hasil = 1;

// Loop for untuk membuat urutan perkalian
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        echo $i . ' x ' . $j . ' = ' . $hasil . "\n";
    }
}
?>
