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
            <li><a href="#"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="#"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="#"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
    
    <div class="container">
        <br>
        <div class="list-table">
            <table>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Tanggal Pinjam</td>                    
                    <td>Tanggal Kembali</td>
                    <td>Judul</td>
                    <td>Jumlah</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksiDB.php";
                    
                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT dp.idDetail,u.nama,pm.tglPinjam,pm.tglKembali,b.judul,dp.jml,dp.status
                    FROM detail_pinjam dp
                    LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
                    LEFT OUTER JOIN user u ON pm.id_user=u.id_user
                    LEFT OUTER JOIN buku b ON b.idBuku=dp.idBuku;");                
                if (mysqli_num_rows($query)) {            
                    while ($row=mysqli_fetch_array($query)) {                                            
                ?>
                        <tr>
                            <td><?php echo $row['idDetail']?></td>
                            <td><?php echo $row['nama']?></td>
                            <td><?php echo $row['tglPinjam']?></td>
                            <td><?php echo $row['tglKembali']?></td>
                            <td><?php echo $row['judul']?></td>
                            <td><?php echo $row['jml']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>
                                <a href="editTransaksiFormAdmin.php?id=<?php echo $row['idDetail'];?>">Edit &nbsp;</a>
                                <a href="hapusTransaksi.php?id=<?php echo $row['idDetail'];?>">Hapus</a>
                            </td>
                        </tr>
                <?php
                    }                
                }                    
                ?>
            </tbody>
            </table>           
        </div>
    </div>
</body>
</html>
