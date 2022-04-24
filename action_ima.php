<?php
include "koneksi.php";

$nama = $_POST['nama_ima'];
$email = $_POST['email_ima'];

$sql = "INSERT INTO tbl_ima VALUES(null,'$nama','$email')";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi tambah data ima Gagal";
}else{
    echo "Eksekusi tambah data ima Berhasil<br>";
    echo "<a href='data_ima.php'>Show data</a>";
}

?>