<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <center>
        <h3>DATA SISWA</h3>
        <br>
        <a href="tambah.php">Tambah Data</a>
        <br><br>
        <table border="3" cellpadding="4">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM siswa";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <td><?=$no++?></td>
                <td><?=$r['nis']?></td>
                <td><?=$r['nama']?></td>
                <td><?=$r['telp']?></td>
                <td><?=$r['alamat']?></td>
                <th>
                    <a href="edit.php">EDIT</a> | 
                    <a href="hapus/php">HAPUS</a>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </center>
</body>
</html>