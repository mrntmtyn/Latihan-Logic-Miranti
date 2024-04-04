<?php

function hitung($kata)
{
    return count(explode(' ', $kata));
}

$kata = "halo halo, saya miranti wsp 29";
$jumlah = hitung($kata);

echo "jumlah kata pada kalimat '$kata' : $jumlah";
