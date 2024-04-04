<?php

// untuk mencetak spasi
function cetakSpasi($jumlah)
{
	for ($i = 0; $i < $jumlah; $i++) {
		echo "&nbsp;";
	}
}

// untuk tanda plus
function cetakTambah($jumlah)
{
	for ($i = 0; $i < $jumlah; $i++) {
		echo "+";
	}
}

// Menentukan tinggi pola
$tinggi = 5;

// segitiga yang atas
for ($i = 0; $i < $tinggi; $i++) {
	cetakSpasi($tinggi - $i - 1);
	cetakTambah($i + 1);
	echo "<br/>";
}

// segitiga yang bawah
for ($i = $tinggi - 2; $i >= 0; $i--) {
	cetakSpasi($tinggi - $i - 1);
	cetakTambah($i + 1);
	echo "<br/>";
}
