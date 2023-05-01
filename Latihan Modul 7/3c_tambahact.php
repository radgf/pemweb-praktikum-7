<?php
include '3b_koneksi.php';

// Mengambil data yang dikirim user
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

// Input data ke database
mysqli_query($koneksi,"INSERT INTO `data_pegawai` (`id`, `nama`, `jabatan`, `email`, `telepon`) 
VALUES (NULL, '$nama', '$jabatan', '$email', '$telepon')");

header("location:3a_index.php");
?>