<?php
session_start();
include "../proses/koneksiDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="../styleCSS.css">
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet">
    <title>Data Anggota</title>
</head>

<body>
    <div class="heading">
        <div id="logo">
            <h4>Perpustakaan</h4>
        </div>
        <ul>
            <li>
                <p>Tanggal: <span id="tanggalwaktu"></span></p>
            </li>
            <li class="nm"><span>Akun: <?= $_SESSION['name'] ?></span> <i class="fa fa-angle-down"></i></li>
        </ul>
    </div>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtamaAdmin.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="../halaman/DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="../halaman/TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
    </nav>
    <div class="container-table">
        <br>
        <h1>LIST DATA TRANSAKSI</h1>
        <br>
        <table class="table1">
            <thead>
                <tr>
                    <th class="tb1">No</th>
                    <th class="tb1">Nama</th>
                    <th class="tb1">Tanggal Pinjam</th>
                    <th class="tb1">Tanggal Kembali</th>
                    <th class="tb1">Judul</th>
                    <th class="tb1">Jumlah</th>
                    <th class="tb1">Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // query tampil data buku
                $query = mysqli_query($connect, "SELECT dp.idDetail,u.nama,pm.tglPinjam,pm.tglKembali,b.judul,dp.jml,dp.status
                    FROM detail_pinjam dp
                    LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
                    LEFT OUTER JOIN user u ON pm.id_user=u.id_user
                    LEFT OUTER JOIN buku b ON b.idBuku=dp.idBuku;");
                if (mysqli_num_rows($query)) {
                    while ($row = mysqli_fetch_array($query)) {
                ?>
                        <tr class="tb">
                            <td class="tb1"><?php echo $row['idDetail'] ?></td>
                            <td class="tb1"><?php echo $row['nama'] ?></td>
                            <td class="tb1"><?php echo $row['tglPinjam'] ?></td>
                            <td class="tb1"><?php echo $row['tglKembali'] ?></td>
                            <td class="tb1"><?php echo $row['judul'] ?></td>
                            <td class="tb1"><?php echo $row['jml'] ?></td>
                            <td class="tb1"><?php echo $row['status'] ?></td>
                            <td>
                                <div><a class="edit" href="../halaman/editTransaksiFormAdmin.php?id=<?php echo $row['idDetail']; ?>">Edit</a></div>
                                <div><a class="hapus" href="../proses/hapusTransaksi.php?id=<?php echo $row['idDetail']; ?>">Hapus</a></div>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../script.js"></script>
</body>

</html>