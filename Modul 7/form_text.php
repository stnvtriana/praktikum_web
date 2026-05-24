<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Text</title>
</head>
<body>
    <form enctype  ="multipart/form-data" action= "simpan.php" method = "post">
    Nama :   <input type = "text" name = "nama"><br><br>
    Tempat Lahir: <input type = "text" name = "tempat"><br><br>
    Tanggal Lahir : <input type = "date" name = "tgl"><br>
    Jenis Kelamin : <br> <input type = "radio" name = "jk" value = "Laki-Laki"> Laki-Laki <br>
    <input type = "radio" name = "jk" value = "Perempuan">  Perempuan <br> 
    Agama : <select name = "agama">
        <option value = "Islam"> Islam </option>
        <option value = "Kristen"> Kristen </option>
        <option value = "Budha"> Budha </option>
        <option value = "Hindu"> Hindu </option> 
        <option value = "Konghucu"> Konghucu </option> </select> <br><br>
    Alamat : <textarea name = "alamat" id = ""></textarea><br><br>
    Hobi : <br> <input type = "checkbox" name = "hobi1" id ="" value = "Berenang"> Berenang <br>
            <input type = "checkbox" name = "hobi2" id ="" value = "Memasak"> Memasak <br>
            <input type = "checkbox" name = "hobi3" id ="" value = "Berlari"> Berlari <br>
            <input type = "checkbox" name = "hobi4" id ="" value = "Mancing"> Mancing <br>
            <input type = "checkbox" name = "hobi5" id ="" value = "Lainnya"> Lainnya <br><br>
            Masukkan Foto : <input type = "file" name = "file"><br><br>
            <input type = "submit" value =  "Kirim">
            </form>
</body>
</html>