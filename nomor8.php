<?php

// $kali = 4 / 3;
// $ruji = 21;
// $pi = 22 / 7;

// function lingkaran($kali, $ruji, $pi){
//     $volume = $kali * $pi * $ruji * $ruji * $ruji;
//     return $volume;
// }

// echo "volume bola dengan jari-jari bola $ruji =" . ' ' . lingkaran($kali, $ruji, $pi);

class Bola
{
    private $ruji;

    public function __construct($ruji)
    {
        $this->ruji = $ruji;
    }

    public function hitungvolume()
    {
        return (4 / 3) * (22 / 7) * pow($this->ruji, 3); // pow untuk mengkuadratkan
    }
}

function hitungvolumeBola($ruji)
{
    $Bola = new Bola($ruji);
    return $Bola->hitungvolume();
}

$ruji = 21;

$volumeBola = hitungvolumeBola($ruji);

echo "volume Bola dengan jari-jari $ruji = $volumeBola";