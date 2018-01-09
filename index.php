<?php
include ("koneksi.php");
echo '<h2 align=center>DATA PERPUSTAKAAN</h2>';
$read = mysqli_query($koneksi,"select * from anggota_perpus");
echo '<table border=1 align="center" >
<tr>
<td>
<h3>
<center>id_anggota </td>
<td><h3><center> password </td>
<td><h3><center> nama_anggota </td>
<td><h3><center> kelas </td>
<td><h3><center><a href=form_input.php>Tambah</td>
</tr>
';

while ($data = mysqli_fetch_assoc($read)){
echo '<tr><td>'.$data["id_anggota"].'</td>
<td>'.$data["password"].'</td>
<td>'.$data["nama_anggota"].'</td>
<td>'.$data["kelas"].'</td>

<td><a href="edit.php?id='.$data["id_anggota"].'"name="edit"> Edit</a></td>
<td><a href="hapus.php?id='.$data["id_anggota"].'"name="hapus"> Hapus </a></td>
<tr>';
}
?>