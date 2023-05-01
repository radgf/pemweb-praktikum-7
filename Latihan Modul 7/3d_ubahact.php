<?php 
include '3b_koneksi.php';
 
// Mengambil data yang dikirim user
$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
echo $id;
 
// Update data ke database
mysqli_query($koneksi, "UPDATE `data_pegawai` SET `nama` = '$nama', `jabatan` = '$jabatan', `email` = '$email', `telepon` = '$telepon' 
WHERE `data_pegawai`.`id` = $id;"); 

header("location:3a_index.php");
?>