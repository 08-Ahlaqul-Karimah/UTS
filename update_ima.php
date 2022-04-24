<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_ima'];
$email = $_POST['email_ima'];


$sql = "UPDATE tbl_ima set nama_ima = '$nama', email_ima = '$email' where id_ima = $id";
$hasil =mysqli_query($koneksi, $sql); 
if (!$hasil){
    echo "Eksekusi update data ima Gagal";
}else{
    echo "Eksekusi update data ima Berhasil<br>";
    echo "<a href='data_ima.php'>Show data</a>";
}

?>