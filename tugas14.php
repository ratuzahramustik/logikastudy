<?php

$jam = 16;
$menit = 0;

// Menentukan waktu berdasarkan kondisi
if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit < 30)) {
    echo "Sekarang waktu kerja.";
} elseif (($jam == 11 && $menit >= 30) || ($jam == 12 && $menit < 15)) {
    echo "Sekarang waktu istirahat.";
} elseif (($jam >= 12 && $jam < 16) || ($jam == 16 && $menit == 0)) {
    echo "Sekarang waktu kerja.";
} else {
    echo "Sekarang bukan waktu kerja.";
}
?>