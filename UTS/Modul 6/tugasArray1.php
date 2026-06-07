<?php
$alamat = array("Ana" => "Nganjuk", "Dika" => "Kediri", "Sinta" => "Bandung");

echo "<h2>Hasil Pengurutan Array Asosiatif</h2>";

// 1. asort() - Mengurutkan berdasarkan VALUE (A-Z), kunci tetap dipertahankan
$data1 = $alamat;
asort($data1);
echo "<h3>asort() - Berdasarkan Alamat (A-Z)</h3>";
echo "<ul>";
foreach ($data1 as $nama => $kota) {
    echo "<li>$nama: $kota</li>";
}
echo "</ul>";

// 2. ksort() - Mengurutkan berdasarkan KEY (A-Z)
$data2 = $alamat;
ksort($data2);
echo "<h3>ksort() - Berdasarkan Nama (A-Z)</h3>";
echo "<ul>";
foreach ($data2 as $nama => $kota) {
    echo "<li>$nama: $kota</li>";
}
echo "</ul>";

// 3. arsort() - Mengurutkan berdasarkan VALUE (Z-A)
$data3 = $alamat;
arsort($data3);
echo "<h3>arsort() - Berdasarkan Alamat (Z-A)</h3>";
echo "<ul>";
foreach ($data3 as $nama => $kota) {
    echo "<li>$nama: $kota</li>";
}
echo "</ul>";

// 4. krsort() - Mengurutkan berdasarkan KEY (Z-A)
$data4 = $alamat;
krsort($data4);
echo "<h3>krsort() - Berdasarkan Nama (Z-A)</h3>";
echo "<ul>";
foreach ($data4 as $nama => $kota) {
    echo "<li>$nama: $kota</li>";
}
echo "</ul>";

// 5. sort() - Mengurutkan berdasarkan VALUE (A-Z), TAPI kunci diubah jadi angka (0,1,2...)
$data5 = $alamat;
sort($data5);
echo "<h3>sort() - Berdasarkan Alamat (Indeks Angka)</h3>";
echo "<pre>";
print_r($data5);
echo "</pre>";

// 6. rsort() - Mengurutkan berdasarkan VALUE (Z-A), TAPI kunci diubah jadi angka (0,1,2...)
$data6 = $alamat;
rsort($data6);
echo "<h3>rsort() - Berdasarkan Alamat Desc (Indeks Angka)</h3>";
echo "<pre>";
print_r($data6);
echo "</pre>";
?>