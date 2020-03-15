<?php

include "koneksi.php";

$nik = @$_POST['nik'];
$nama = @$_POST['nama'];
$birth = @$_POST['birth'];
$city = @$_POST['city'];
$email = @$_POST['email'];
$pwd = @$_POST['pwd'];

$query = "INSERT INTO dataa (nik,nama,birth,city,email,pwd)
          VALUES ('$nik', '$nama', '$birth', '$city', '$email', '$pwd')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL";
}

    echo "<a href='data.php'>Lihat Data</a>";
