<?php

class Data
{

    private $angka;

    public function __construct($angka)
    {
        $this->angka = $angka;
    }

    public function mean()
    {
        return array_sum($this->angka) / count($this->angka); // hitung mean dengan bagi jumlah seluruh angka di data dengan banyaknya angka
    }

    public function median()
    {
        sort($this->angka); // urut dari yang terkecil
        $count = count($this->angka); // hitung jumlah angka
        $nilaiTengah = floor(($count - 1) / 2);

        // jika data ganjil hasilnya yaitu nilai tengahnya, jika data genap, jumlahkan 2 data yang ditengah lalu dibagi 2
        if ($count % 2) {
            return $this->angka[$nilaiTengah];
        } else {
            return ($this->angka[$nilaiTengah] + $this->angka[$nilaiTengah + 1]) / 2;
        }
    }

    public function modus()
    {
        $dataCount = array_count_values($this->angka); // hitung berapa angka yang ada di data
        $maxCount = max($dataCount); // mencari data yang paling banyak muncul
        return array_keys($dataCount, $maxCount);
    }
}

$angka = [15, 20, 25, 30, 30, 35, 40, 45, 50, 55, 60, 60];
$data = new data($angka);

echo "Mean: " . $data->mean() . '<br>';
echo "Median: " . $data->median() . '<br>';

$modus = $data->modus();
echo "Modus: ";
if (count($modus) > 1) {
    echo implode(", ", $modus); // jika modus lebih dari satu, tampilkan dengan pemisah spasi dan koma
} else {
    echo $modus[0];
}
