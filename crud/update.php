<?php

include './koneksi.php';

$nik = @$_POST['nik'];
$nama = @$_POST['nama'];
$birth = @$_POST['birth'];
$city = @$_POST['city'];
$email = @$_POST['email'];
$pwd = @$_POST['pwd'];

$query = "UPDATE dataa SET nama = '$nama', birth = '$birth', city = '$city', email = '$email', pwd = '$pwd' WHERE nik = '$nik' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='data.php'>Lihat Data</a>";
?>