<?php
 $nama = $_POST['nama'];
 $password = $_POST['password'];
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kondisi pengecekan login
    if ($nama === "ana" && $password === "12345678") {
        echo "<h2>Login Berhasil!</h2>";
        echo "Username :". $nama."<br>";
        echo "Password :" .$password. "<br>";
    } else {
        // JIKA SALAH: Tampilkan pesan gagal dan tombol kembali
        echo "<h2>Login Gagal!</h2>";
        echo "Username atau Password yang Anda masukkan salah.<br><br>";
        echo "<a href='javascript:history.back()'>Kembali ke Halaman Login</a>";
    }
} else {
    echo "Akses ditolak.";
}