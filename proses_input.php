<?php
include 'koneksi.php';

if(isset($_GET["input"])){
    $id = $_GET["id_anggota"];
    $pass = $_GET["password"];
    $nama_anggota = $_GET["nama_anggota"];
    $kelas = $_GET["kelas"];
    $tambah = mysqli_query($koneksi,"insert into perpus_sekolah(id_anggota,password,nama_anggota,kelas_anggota) values ('$id','$pass','$nama_anggota','$kelas')");
if ($tambah){
echo "Data berhasil di simpan!";
}
else{
	echo"Data Gagal Disimpan";
}
}

?>