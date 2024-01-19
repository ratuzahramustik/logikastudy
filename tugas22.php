<?php

function hitungWaktuKerja($jamKerja, $istirahatShalat, $istirahatMakan)
{
    $jamKerjaDetik = $jamKerja * 3600;
    $istirahatShalatDetik = $istirahatShalat * 60;
    $istirahatMakanDetik = $istirahatMakan * 60;

    $totalIstirahatDetik = $istirahatShalatDetik + $istirahatMakanDetik;

    $waktuKerjaDetik = $jamKerjaDetik - $totalIstirahatDetik;

    $waktuKerjaJam = floor($waktuKerjaDetik / 3600);
    $waktuKerjaMenit = floor(($waktuKerjaDetik % 3600) / 60);

    return [
        'waktuKerjaJam' => $waktuKerjaJam,
        'waktuKerjaMenit' => $waktuKerjaMenit,
        'totalIstirahatDetik' => $totalIstirahatDetik,
        'totalIstirahatJam' => floor($totalIstirahatDetik / 3600),
        'totalIstirahatMenit' => floor(($totalIstirahatDetik % 3600) / 60),
    ];
}

$jamKerja = 8;
$istirahatShalat = 20; 
$istirahatMakan = 30;

$hasilPerhitungan = hitungWaktuKerja($jamKerja, $istirahatShalat, $istirahatMakan);

echo "Waktu Kerja: " . $hasilPerhitungan['waktuKerjaJam'] . " jam " . $hasilPerhitungan['waktuKerjaMenit'] . " menit\n";
echo "Total Waktu Istirahat: " . $hasilPerhitungan['totalIstirahatJam'] . " jam " . $hasilPerhitungan['totalIstirahatMenit'] . " menit\n";
