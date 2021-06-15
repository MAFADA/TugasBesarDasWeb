<?php
session_start();
include "../proses/koneksiDB.php";
?>
<html>

<head>
    <title>Edit Data Transaksi</title>
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
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM detail_pinjam WHERE idDetail='$id';";
    $result = mysqli_query($connect, $query);

    ?>
    <div class="container">
        <table class="table2">
            <form action="../proses/prosesEditTrAdmin.php" method="get">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <thead>
                        <tr>
                            <th colspan="2">
                                PERUBAHAN DATA TRANSAKSI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id</td>
                            <td><input type="number" name='id' value="<?php echo $row['idDetail']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><input type="text" name="status" value="<?php echo $row['status']; ?>"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <input class="register" type="submit" name="edit" value='Edit'>
                            </th>
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