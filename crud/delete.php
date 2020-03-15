<?php

include './koneksi.php';

$nik = @$_GET['nik'];
$query = "DELETE FROM dataa WHERE nik = '$nik'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);


if ($num > 0){
    echo "Berhasil Hapus Data <br>";

}else{
    echo "Gagal Hapus Data <br>";
}
echo "<a href='data.php'>Lihat Data</a>";
?>