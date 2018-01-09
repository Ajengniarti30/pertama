<?php
include ("koneksi.php");
if(isset($_POST["submit"])){
$id = $_POST["id_anggota"];
$password = $_POST["password"];
$nama_anggota = $_POST["nama_anggota"];
$kelas = $_POST["kelas"];
$update = mysqli_query($koneksi,'update absen_murid set id_anggota="'.$id.'", password="'.$pass.'" , nama_anggota="'.$nama_anggota.'", kelas="'.$kelas.'"');
if($update){
echo "Data Berhasil Disimpan ,<a href='index.php'>back</a>";
}
else{
echo "Gagal Update <a href='edit.php?id=".$id."'> disini</a>";
}
}
?>