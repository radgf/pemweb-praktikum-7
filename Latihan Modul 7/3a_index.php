<!DOCTYPE html>
<html>
    <head>
        <title>DATA PEGAWAI</title>
        <style>
            a {
                text-decoration: none;
                color: black;
                background: #ACB1D6;
                border-radius: 3px;
                border: black 1px solid;
                padding: 4px 8px;
                text-align: center;
            }
            h2 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>DATA PEGAWAI</h2>
        <table border="1" align="center">
            <tr style="background-color: #ACB1D6;">
                <th width="50">ID</th>
                <th width="300">Nama</th>
                <th width="200">Jabatan</th>
                <th width="300">Email</th>
                <th width="200">Telepon</th>
            </tr>
            <?php 
            include '3b_koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM data_pegawai");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr>
                    <td width="50" align="center"><?php echo $no++; ?></td>
                    <td width="300" align="center"><?php echo $d['nama']; ?></td>
                    <td width="200" align="center"><?php echo $d['jabatan']; ?></td>
                    <td width="300" align="center"><?php echo $d['email']; ?></td>
                    <td width="200" align="center"><?php echo $d['telepon']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </table>
        <br><br><br>
        <div align="center">
            <a href="3c_tambah.php">Tambah</a>
            <a href="3d_ubah.php">Ubah</a>
            <a href="3e_hapus.php">Hapus</a>
        </div>
    </body>
</html>