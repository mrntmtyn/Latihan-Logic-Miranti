<?php

function mencariHuruf($kata){
    $jumlahHuruf = array_count_values(str_split($kata));
    $palingSeringMuncul = max($jumlahHuruf);

    return $palingSeringMuncul;
}

$kata = "miranti mitayani";
$palingSeringMuncul = mencariHuruf($kata);

echo "Huruf yang paling sering muncul pada kata '$kata' yaitu '$palingSeringMuncul'";

// array_count_values menghitung jumlah huruf dalam kata
// str_split untuk memecah string menjadi array individu(?)