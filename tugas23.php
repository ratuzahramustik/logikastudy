<?php

function hitungSuku($a, $n)
{
    return $a * 4 + $n * 3;
}

$a = 9;

echo "Rumus: a * 4 + n * 3\n";
echo "Nilai a: $a\n";
echo "Suku pertama sampai suku ke-12:\n";

for ($n = 1; $n <= 12; $n++) {
    $hasil = hitungSuku($a, $n);
    echo "Suku ke-$n: $hasil\n";
}
?>
