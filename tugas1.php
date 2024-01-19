<?php
// Usia Andi
$usia_andi = 16;
// Tahun kelahiran Andi
$tahun_lahir_andi = date("Y") - $usia_andi;

// Usia Dani
$usia_dani = $usia_andi;
// Tahun kelahiran Dani
$tahun_lahir_dani = $tahun_lahir_andi;

// Usia Beni (3 tahun lebih tua dari Dani)
$usia_beni = $usia_dani + 3;
// Tahun kelahiran Beni
$tahun_lahir_beni = $tahun_lahir_dani;

// Usia Eko (1 lustrum sebelum Beni)
$usia_eko = $usia_beni + 5;
// Tahun kelahiran Eko
$tahun_lahir_eko = $tahun_lahir_beni - 5;

// Tampilkan tahun kelahiran masing-masing orang
echo "Tahun kelahiran Andi: $tahun_lahir_andi\n";
echo "Tahun kelahiran Dani: $tahun_lahir_dani\n";
echo "Tahun kelahiran Beni: $tahun_lahir_beni\n";
echo "Tahun kelahiran Eko: $tahun_lahir_eko\n";

// Periksa apakah mereka lahir pada tahun kabisat
if ($tahun_lahir_andi % 4 == 0) {
    echo "Andi lahir pada tahun kabisat\n";
} else {
    echo "Andi tidak lahir pada tahun kabisat\n";
}

if ($tahun_lahir_beni % 4 == 0) {
    echo "Beni lahir pada tahun kabisat\n";
} else {
    echo "Beni tidak lahir pada tahun kabisat\n";
}

if ($tahun_lahir_eko % 4 == 0) {
    echo "Eko lahir pada tahun kabisat\n";
} else {
    echo "Eko tidak lahir pada tahun kabisat\n";
}

?>
