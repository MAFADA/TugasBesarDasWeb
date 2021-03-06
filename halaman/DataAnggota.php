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
            <li><p>Tanggal: <span id="tanggalwaktu"></span></p></li>
            <li class="nm"><span>Akun: <?= $_SESSION['name'] ?></span> <i class="fa fa-angle-down"></i></li>
        </ul>
    </div>
    <a href="../proses/SessionLogout.php"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtamaAdmin.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="../halaman/DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="../halaman/TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
        </ul>
    </nav>
    <div class="container-table">
        <br>
        <h1>LIST DATA ANGGOTA</h1>
        <br>
        <table class="table1">
            <thead>
                <tr>
                    <th class="tb1">No</th>
                    <th class="tb1">No.Induk</th>
                    <th class="tb1">Nama Lengkap</th>
                    <th class="tb1">Alamat</th>
                    <th class="tb1">No HP</th>
                    <th class="tb1">Tanggal Diterima</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT id_user,noInduk,nama,alamat,noHp,tglTerima 
                        FROM user";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <td class="tb1"><?php echo $row['id_user'] ?></td>
                            <td class="tb1"><?php echo $row['noInduk'] ?></td>
                            <td class="tb1"><?php echo $row['nama'] ?></td>
                            <td class="tb1"><?php echo $row['alamat'] ?></td>
                            <td class="tb1"><?php echo $row['noHp'] ?></td>
                            <td class="tb1"><?php echo $row['tglTerima'] ?></td>
                            <td>
                                <div><a class="edit" href="../halaman/editDataAnggota.php?id=<?php echo $row['id_user']; ?>">Edit</a></div>
                                <div><a class="hapus" href="../proses/hapusAnggota.php?id=<?php echo $row['id_user']; ?>">Hapus</a></div>
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