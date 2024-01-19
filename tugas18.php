<?php

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo 'Nama Barang: ' . $item['nama'] . ', Diskon: ' . $item['diskon'] . "%\n";
    }
}
