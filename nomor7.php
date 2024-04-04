<?php

// $ruji = 21;
// $pi = 22 / 7;

// function lingkaran($ruji, $pi){
//     $luas = $pi * $ruji * $ruji;
//     return $luas;
// }

// echo "luas lingkaran dengan jari-jari $ruji =" . ' ' . lingkaran($ruji, $pi);

class Lingkaran
{
    private $ruji;

    public function __construct($ruji)
    {
        $this->ruji = $ruji;
    }

    public function hitungLuas()
    {
        return (22 / 7) * pow($this->ruji, 2); // pow untuk mengkuadratkan
    }
}

function hitungLuasLingkaran($ruji)
{
    $lingkaran = new Lingkaran($ruji);
    return $lingkaran->hitungLuas();
}

$ruji = 7;

$luasLingkaran = hitungLuasLingkaran($ruji);

echo "Luas lingkaran dengan jari-jari $ruji = $luasLingkaran";
