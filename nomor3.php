<?php

// mendefinisikan fungsi yg menerima argumen kata
function hitungjumlah($kata)
{
    // array ksosong menyimpan hitungan setiap string
    $hitung = [];

    // loop dimulai dari 0, loop terus dilakukan selama belum melebihi jumlah huruf dari kata. hitung disimpan dalam variabel jumlah
    for ($i = 0; $i < strlen($kata); $i++) {
        $jumlah = $kata[$i];
        if (array_key_exists($jumlah, $hitung)) {
            $hitung[$jumlah]++;
        } else {
            $hitung[$jumlah] = 1;
        }
    }

    // menampilkan hitung
    foreach ($hitung as $jumlah => $hasil) {
        echo "$jumlah = $hasil" . '<br>';
    }
}

$input = "qqqqqqqqtttttttrrrrrrryyyyvvvvvgggggmmmmmm";
echo "input: $input" . '<br>';
echo "output:" . '<br>';
// memanggil fungsi hitung jumlah dan meneruskan argumen input
hitungjumlah($input);
