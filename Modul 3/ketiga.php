<?php
$a = "5";
$b = "2.5";
$komentar = "Selamat Datang";

echo ("Nilai variable a Adalah = $a <br>");
//variable bertipe integer
echo ("Nilai variable b Adalah = $b <br>");
//variable bertipe real
echo ("Nilai variable komentar adalah = $komentar <br>");
//variable bertipe string

$tambah = $a + $b;
//rumus penambahan
$kurang = $a - $b;
//rumus pengurangan
$kali = $a * $b;
//rumus perkalian
$bagi = $a / $b;
//rumus pembagian

echo ("Hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("Hasil pengurangan a dan b adalah = $kurang <br>");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");

$nama = "ITM";
$garis = "==============================================";

echo "<p>";
echo $garis."<br>";
echo $komentar. " Di Lab". "<br>Selamat Belajar Pemograman Web <br>";
echo $garis."<br>";
?>
