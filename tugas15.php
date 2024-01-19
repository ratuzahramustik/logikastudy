<?php

function ubahFormatWaktu($waktu)
{
    list($jam, $menit) = explode(':', $waktu);

    $jam12 = $jam % 12;
    $jam12 = ($jam12 == 0) ? 12 : $jam12;

    $amPm = ($jam < 12) ? 'am' : 'pm';

    $waktuBaru = sprintf("%02d:%s %s", $jam12, $menit, $amPm);

    return $waktuBaru;
}

$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Waktu awal: $waktu1, Waktu baru: $hasil1\n";
echo "Waktu awal: $waktu2, Waktu baru: $hasil2\n";
echo "Waktu awal: $waktu3, Waktu baru: $hasil3\n";

?>


