<html>
<head>
</head>
<body>
<?php 
include("koneksi.php");
$id = $_GET["id"];
$tampil = mysqli_query($koneksi,"select * from absen_murid where id_anggota='$id'");
if (mysqli_num_rows($tampil)==0)
{
echo "Data Tidak Ada";
}
else{
$data = mysqli_fetch_assoc($tampil);
}
?>
<form action="edit_proses.php" method="post">
<table>
<tr><td> id_anggota </td><td> <input type="text" name="id_anggota" value="<?php echo $data["id_anggota"]?>" required></td></tr>
<tr><td> password </td><td> <input type="text" name="password" value="<?php echo $data["password"]?>" required></td></tr>
<tr><td> nama_anggota </td><td> <input type="text" name="nama_anggota" value="<?php echo $data["nama_anggota"]?>" required></td></tr>
<tr><td> kelas </td><td> <input type="text" name="kelas" value="<?php echo $data["kelas"]?>" required></td></tr>
<tr><td> <input type="submit" name="submit" value="Submit">
</html>