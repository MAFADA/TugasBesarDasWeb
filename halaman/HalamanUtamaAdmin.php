<?php
session_start();
include "../proses/koneksiDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Perpustakaan </title>
    <link rel="stylesheet" type="text/css" href="../DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="../styleCSS.css">
    <script type="text/JavaScript" src="../jquery-3.6.0.min.js"></script>
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="heading">
        <div>
            <h4>Perpustakaan</h4>
        </div>
        <ul>
            <li><p>Tanggal: <span id="tanggalwaktu"></span></p></li>
            <li class="nm"><span>Akun: <?= $_SESSION['name'] ?></span> <i class="fa fa-angle-down"></i></li>
        </ul>
    </div>
    <a href="waldan"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtamaAdmin.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="../halaman/DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="../halaman/TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
        </ul>
    </nav>
    <div class="off">    
        <div class='data_pinjam'>
            <?php 
                $sql = $connect->query("SELECT COUNT(*) AS jmlPinjam FROM detail_pinjam");
                $pinjam = $sql->fetch_assoc();
            ?>

            <h5 class="title">Data Peminjaman</h5>
            <p class="text">Data buku yang dipinjam</p>
            <h4><?= $pinjam['jmlPinjam']; ?></h4>
            <a href="TransaksiAdmin.php" class="link">Lihat Data Peminjaman</a>
        </div>                
<br>
        <div class='data_buku'>
            <?php 
                $sql = $connect->query("SELECT COUNT(*) AS jmlBuku FROM buku");
                $pinjam = $sql->fetch_assoc();
            ?>

            <h5 class="title">Data Buku</h5>
            <p class="text">Jumlah buku saat ini</p>
            <h4><?= $pinjam['jmlBuku']; ?></h4>
            <a href="DataBuku.php" class="link">Lihat Data Buku</a>
        </div>
<br>
        <div class='data_anggota'>
            <?php 
                $sql = $connect->query("SELECT COUNT(*) AS jmlAnggota FROM user WHERE id_level='2'");
                $pinjam = $sql->fetch_assoc();
            ?>

            <h5 class="title">Data Anggota</h5>
            <p class="text">Jumlah anggota saat ini</p>
            <h4><?= $pinjam['jmlAnggota']; ?></h4>
            <a href="DataAnggota.php" class="link">Lihat Data Anggota</a>
        </div>                             
    </div>
    <script src="../script.js"></script>
</body>

</html>