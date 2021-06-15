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
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="../halaman/DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="../halaman/TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
        </ul>
    </nav>
    <div class="off">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cum non dolores fugit doloremque quisquam, sed dignissimos perferendis explicabo eum vero soluta eos? Aliquam, veniam? Ipsa pariatur distinctio quia unde.
        </p>
    </div>
    <script src="../script.js"></script>
</body>

</html>