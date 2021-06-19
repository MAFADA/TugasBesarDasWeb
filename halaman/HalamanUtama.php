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
            <li>
                <p>Tanggal: <span id="tanggalwaktu"></span></p>
            </li>
            <li class="nm"><span>Akun: <?= $_SESSION['name'] ?></span> <i class="fa fa-angle-down"></i></li>
        </ul>
    </div>
    <a href="../proses/SessionLogout.php"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtama.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/ProfilPerpus.php"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="../halaman/KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="../halaman/Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <section class="about">
        <div>
            <h1>WELCOME TO LIBRARY</h1>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
    </section>

    <section class="informasi">
        <div class="detail">
            <?php
            $sql = $connect->query("SELECT COUNT(*) AS jmlPinjam FROM detail_pinjam");
            $pinjam = $sql->fetch_assoc();
            ?>
            <a href="TransaksiAdmin.php" class="link">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: left;"><?= $pinjam['jmlPinjam']; ?></td>
                        <td style="text-align: right;"><i class="fas fa-pen"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2">Data Peminjaman</td>
                    </tr>
                </table>
            </a>
        </div>

        <div class="detail">
            <?php
            $sql = $connect->query("SELECT COUNT(*) AS jmlBuku FROM buku");
            $pinjam = $sql->fetch_assoc();
            ?>
            <a href="DataBuku.php" class="link">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: left;"><?= $pinjam['jmlBuku']; ?></td>
                        <td style="text-align: right;"><i class="fas fa-book"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2">Data Buku</td>
                    </tr>
                </table>
            </a>
        </div>
    </section>
    <script src="../script.js"></script>
</body>

</html>