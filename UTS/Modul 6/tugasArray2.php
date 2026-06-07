<?php
$hobi  = array("Ana" => "Membaca", "Dika" => "Bersepeda", "Sinta" => "Memasak");

echo "<h2>Daftar Hobi Awal</h2>";
echo "<ul>";
foreach ($hobi as $nama => $kegiatan) {
    echo "<li>$nama hobinya $kegiatan</li>";
}
echo "</ul><hr>";

// 1. count() - Menghitung total elemen dalam array
$jumlah = count($hobi);
echo "<h3>1. Fungsi count()</h3>";
echo "Total orang dalam daftar: " . $jumlah . " orang<br><br>";

// 2. array_keys() - Mengambil semua kunci (nama)
$daftar_nama = array_keys($hobi);
echo "<h3>2. Fungsi array_keys()</h3>";
echo "Daftar nama saja: " . implode(", ", $daftar_nama) . "<br><br>";

// 3. array_key_exists() - Memeriksa apakah kunci tertentu ada
echo "<h3>3. Fungsi array_key_exists()</h3>";
$cari_nama = "Dika";
if (array_key_exists($cari_nama, $hobi)) {
    echo "Apakah ada nama $cari_nama? <b>Ya, ditemukan!</b><br><br>";
} else {
    echo "Apakah ada nama $cari_nama? <b>Tidak ditemukan.</b><br><br>";
}

// 4. array_merge() - Menggabungkan dua array
echo "<h3>4. Fungsi array_merge()</h3>";
$hobi_tambahan = array("Budi" => "Berenang", "Lani" => "Menyanyi");
$hobi_lengkap = array_merge($hobi, $hobi_tambahan);

echo "Daftar setelah digabung dengan data baru:<br><ul>";
foreach ($hobi_lengkap as $nama => $kegiatan) {
    echo "<li>$nama: $kegiatan</li>";
}
echo "</ul><br>";

// 5. array_values() - Mengambil semua nilai (hobi) dari hasil gabungan
$daftar_hobi = array_values($hobi_lengkap);
echo "<h3>5. Fungsi array_values()</h3>";
echo "Daftar semua aktivitas hobi (tanpa nama): " . implode(", ", $daftar_hobi);
?>