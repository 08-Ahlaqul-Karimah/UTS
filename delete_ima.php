<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql="DELETE FROM tbl_ima WHERE id_ima=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data ima Gagal";
}else{
    echo "Data ima berhasil di delete<br>";
    echo "<a href='data_ima.php'>Show data</a>";

}
?>