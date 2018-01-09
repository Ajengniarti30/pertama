<?php 
include 'koneksi.php';
$id=$_GET['id']; 
$delete="Delete from absen_murid Where id_anggota='$id'"; 
mysqli_query($koneksi,$delete) or die ("Error"); 
echo "<center><h3>Data berhasil di hapus</h3></center> \n
        <h2><a href="index.php">back</a></h2>";     
?> 