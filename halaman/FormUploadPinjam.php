<?php
session_start();
include "../proses/koneksiDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="../DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="../styleCSS.css">
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
    <a href="../proses/SessionLogout.php"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/ProfilPerpus.html"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="../halaman/KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="../halaman/Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <?php
    $idBuku = $_GET['id'];
    $query = "SELECT * FROM buku WHERE idBuku='$idBuku'";
    $result = mysqli_query($connect, $query);
    ?>
    <div class="container">
        <br>
        <h1>PEMINJAMAN BUKU</h1>
        <br>
        <table class="table2">
            <form action="../proses/SessionPinjamProses.php" method="get">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id Buku</td>
                            <td><input class="a" type="number" name='id' value="<?php echo $idBuku; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Kode Buku</td>
                            <td><input class="a" type="text" name="kode" value="<?php echo $row['kode_buku']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><input class="a" type="text" name="judul" value="<?php echo $row['judul']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td>
                            <td><input class="a" type="date" name="tglPinjam"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali</td>
                            <td><input class="a" type="date" name="tglKembali"></td>
                        </tr>
                        <tr>
                            <td class="kolom1">Jumlah</td>
                            <td><input class="a" type="number" name='jumlah'></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <input class="register" type="submit" name="pinjam" value='Pinjam'>
                            </th>
                            <!-- <form action="" method="get">
                            <th colspan="2">
                                <input class="konfirm" type="submit" name="konfirm" value='konfirm'>
                            </th>
                            </form> -->
                        </tr>
                    </tfoot>
                <?php
                }
                ?>
            </form>
        </table>
    </div>
    <script src="../script.js"></script>
</body>

</html>