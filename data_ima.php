<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<table width="90%" border=1" collspacing="1">
<a href ="form_ima.php">Tambah Data Mahasiswa<br><br>
    <tr>
        <td>NO</td> 
        <td>Nama_ima </td> 
        <td>Email_ima</td> 
        <td>Action</td> 
    </tr>
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tbl_ima";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_ima'];?></td>
            <td><?=$row['nama_ima'];?></td>
            <td><?=$row['email_ima'];?></td>
            <td> 
                <a href ="form_edit.php?id=<?=$row['id_ima']?>">Edit
                <a href ="delete_ima.php?id=<?=$row['id_ima']?>">Delete
            </td>
                      
        </tr>
        <?php }
        ?>
</table>
</body>
</html> 
