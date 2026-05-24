<?php
 $nama = $_POST['nama'];
 $tempat = $_POST['tempat'];
 $tgl = $_POST['tgl'];
 $jk = $_POST['jk'];
 $agama = $_POST['agama'];
 $alamat = $_POST['alamat'];
 $dir = "image/";
 $upload =  $dir.$_FILES['file']['name'];
 echo "Nama :". $nama."<br>";
 echo "Tempat Lahir :" .$tempat. "<br>";
 echo "Tanggal Lahir :" .$tgl. "<br>";
 echo "Jenis Kelammin :" .$jk. "<br>";
 echo "Agama :" .$agama. "<br>";
 echo "Hobi :". "<br>";
if(isset($_POST ['hobi1'])){
    echo "~ " .$_POST['hobi1']. "<br>";
}
if(isset($_POST ['hobi2'])){
    echo "~ " .$_POST['hobi2']. "<br>";
}
if(isset($_POST ['hobi3'])){
    echo "~ " .$_POST['hobi3']. "<br>";
}
if(isset($_POST ['hobi4'])){
    echo "~ " .$_POST['hobi4']. "<br>";
}
if(isset($_POST ['hobi5'])){
    echo "+ " .$_POST['hobi5']. "<br>";
}

if (is_uploaded_file($_FILES['file']['tmp_name'])){
     $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $upload);
     if ($kirim){
        echo "File berhasil diupload ke server pada folder <b>$upload</b>";
     } else {
        echo "File gagal diupload";
        echo "error :", $_FILES['file']['error'];
     }

 }

 
?>
