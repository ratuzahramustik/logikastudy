<?php

$tbbeni = 44;
$tinggibeni = 1.48;
$kuadrat = $tbbeni * $tbbeni;
$hasilimt = $tbbeni / $kuadrat;
echo "IMT anda adalah $hasilimt";

if($hasilimt <= 18.5) {
    echo "Berat badan kurang";
} else if ($hasilimt >= 18.5 && $hasilimt <= 22.9) {
    echo "Berat badan anda normal";
}else if($hasilimt >= 22.9 && $hasilimt <= 24.9) {
    echo "berat badan anda lebih";
}else {
    echo "anda obesitas";
}


