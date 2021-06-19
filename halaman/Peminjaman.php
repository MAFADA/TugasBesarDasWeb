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
    <title>Data Peminjaman</title>
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
    <a href="waldan"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtama.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/ProfilPerpus.php"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="../halaman/KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="../halaman/Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <div class="container-table">
        <br>
        <h1>LIST DATA PEMINJAMAN</h1>
        <br>
        <table class="table1">
            <tr>
                <th class="tb1">No</th>
                <th class="tb1">Peminjam</th>
                <th class="tb1">Kode buku</th>
                <th class="tb1">Judul</th>
                <th class="tb1">Tanggal Pinjam</th>
                <th class="tb1">Tanggal Kembali</th>
                <th class="tb1">Jumlah</th>
                <th class="tb1">Status</th>
                <th></th>
            </tr>
            <?php
            // query tampil data buku
            $query = mysqli_query($connect, "SELECT dp.idDetail,u.nama,b.kode_buku,b.judul,pm.tglPinjam,
                    pm.tglKembali,jml,status FROM detail_pinjam dp
                    LEFT OUTER JOIN buku b ON b.idBuku=dp.idBuku
                    LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
                    LEFT OUTER JOIN user u ON u.id_user=pm.id_user");

            if (mysqli_num_rows($query)) {
                while ($row = mysqli_fetch_array($query)) {
            ?>
                    <tr class="tb">
                        <td class="tb1"><?php echo $row['idDetail'] ?></td>
                        <td class="tb1"><?php echo $row['nama'] ?></td>
                        <td class="tb1"><?php echo $row['kode_buku'] ?></td>
                        <td class="tb1"><?php echo $row['judul'] ?></td>
                        <td class="tb1"><?php echo $row['tglPinjam'] ?></td>
                        <td class="tb1"><?php echo $row['tglKembali'] ?></td>
                        <td class="tb1"><?php echo $row['jml'] ?></td>
                        <td class="tb1"><?php echo $row['status'] ?></td>
                        <td>
                            <a class="edit" href="../halaman/editPerpanjangan.php?id=<?php echo $row['idDetail']; ?>">Perpanjang</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
    <script src="../script.js"></script>
</body>

</html>