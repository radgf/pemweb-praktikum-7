<?php
include '3b_koneksi.php';

// Mengambil data yang dikirim user
$id = $_POST['id'];

// Delete data yang ada pada database
mysqli_query($koneksi, "DELETE FROM `data_pegawai` WHERE `data_pegawai`.`id` = $id");

header("location: 3a_index.php");
?>