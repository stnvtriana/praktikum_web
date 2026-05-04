<?php
// Menentukan nilai input
$r = 7;      // Jari-jari
$s = 15;     // Garis pelukis (sisi miring)
$pi = M_PI;  // Menggunakan konstanta Pi bawaan PHP (3.14159...)

// Menghitung Luas Alas
$luasAlas = $pi * pow($r, 2);

// Menghitung Luas Permukaan
$luasPermukaan = ($pi * pow($r, 2)) + ($pi * $r * $s);

// Menampilkan Hasil
echo "--- Perhitungan Bangun Ruang Kerucut ---" . "<br>";
echo "Jari-jari (r)    : $r" . "<br>";
echo "Garis Pelukis (s): $s" . "<br>";
echo "----------------------------------------" . "<br>";
echo "Luas Alas        : " . number_format($luasAlas, 2, ',', '.') . "<br>";
echo "Luas Permukaan   : " . number_format($luasPermukaan, 2, ',', '.') . "<br>";
?>