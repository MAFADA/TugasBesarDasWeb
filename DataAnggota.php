<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="styleCSS.css">
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Data Anggota</title>
</head>
<body>
    <div id="logo">
        <h4>Perpustakaan</h4>
    </div>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
    
    <div class="container">
        <br>
        <div class="list-table">
            <table class="table1">
                <!-- <thead> -->
                    <tr>
                        <th>No</th>
                        <th>No.Induk</th>
                        <th>Nama Lengkap</th>                    
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Tanggal Diterima</th>
                        <th></th>
                    </tr>            
                <!-- </thead> -->
                <!-- <tbody> -->
                        <?php
                        include "koneksiDB.php";

                        $query="SELECT id_user,noInduk,nama,alamat,noHp,tglTerima 
                        FROM user";
                        $result = mysqli_query($connect,$query);

                        if (mysqli_num_rows($result)) {
                            while ($row=mysqli_fetch_array($result)) {                                            
                        ?>
                        <tr class="tb">
                            <td><?php echo $row['id_user']?></td>
                            <td><?php echo $row['noInduk']?></td>
                            <td><?php echo $row['nama']?></td>                            
                            <td><?php echo $row['alamat']?></td>
                            <td><?php echo $row['noHp']?></td>
                            <td><?php echo $row['tglTerima']?></td>                
                            <td>
                                <a class="edit" href="editDataAnggota.php?id=<?php echo $row['id_user'];?>">Edit</a>
                                <a class="hapus" href="hapusAnggota.php?id=<?php echo $row['id_user'];?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                <!-- </tbody> -->
            
            </table>
        </div>
    </div>
</body>
</html>
