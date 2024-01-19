<?php

$bilangan = [75,77,87,70,90,81,69,87,66];

$kelompok_awal = [];
$kelompok_dua = [];

foreach  ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kelompok_awal[] = $nilai;
    }else{
        $kelompok_dua[] = $nilai;
    }
}

echo "Kelompok awal (Kompeten): ";
foreach ($kelompok_awal as $nilai) {
    echo $nilai . " ";
}

echo "Kelompok dua (Belum Kompeten): ";
foreach ($kelompok_dua as $nilai) {
    echo $nilai . " ";
}

?>