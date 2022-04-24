<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data ima</title>
</head>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];
$sql ="SELECT * FROM tbl_ima WHERE id_ima=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query Salah";

}
?>

<h1>Form Tambah Data ima</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
    
?>
    <form method="post" action="update_ima.php">
        <input type="hidden" name="id" value="<?php echo $row['id_ima']?>">
        Nama  : <input type="text" name="nama_ima" value="<?php echo $row['nama_ima']?>"><br/>
        Email : <input type="text" name="email_ima" value="<?php echo $row['email_ima']?>"><br/>
        <button type="submit">Update</button> 
    </form> 
<?php }?>
</body>
</html>

