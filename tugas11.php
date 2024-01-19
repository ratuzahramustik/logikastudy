<?php

$mtkandi = 87;
$ingandi = 85;
$indandi = 87;
$umurandi = 25;
$total = $mtkandi + $indandi + $ingandi;
$ratarata = $total / 3;

if($umurandi >= 16 && $umurandi <= 25) {
    if($mtkandi >= 87 && $indandi >= 87 && $ingandi >= 85 && $ratarata >= 85) {
        echo "kamu lolos";
    } else {
        echo "gak lolos, coba lain kali";
    }
}else {
    echo "umur kamu tidak mencukupi";
}

?>