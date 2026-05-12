<?php
$bil = 2;
$total = 0; // Variabel untuk menampung hasil penjumlahan

while ($bil <= 50) {
    $sebelumnya = $total; // Menyimpan nilai total sebelum ditambah
    $total = $total + $bil; // Menjumlahkan total dengan angka saat ini
    
    // Menampilkan penjabaran penjumlahan
    echo "$sebelumnya + $bil = $total <br>";
    
    $bil++;
}
?>
