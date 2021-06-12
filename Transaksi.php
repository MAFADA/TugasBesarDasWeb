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
            <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Tanggal Pinjam</td>                    
                    <td>Tanggal Kembali</td>
                    <td>Judul</td>
                    <td>Jumlah</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksiDB.php";

                    $no=1;
                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT u.nama,pm.tglPinjam,pm.tglKembali,b.judul,dp.jml
                    FROM detail_pinjam dp
                    LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
                    LEFT OUTER JOIN user u ON pm.id_user=u.id_user
                    LEFT OUTER JOIN buku b ON b.idBuku=dp.idBuku;");                
                    
                    while ($row=mysqli_fetch_array($query)) {                                            
                ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $row['nama'];?></td>
                            <td><?= $row['tglPinjam'];?></td>
                            <td><?= $row['tglKembali'];?></td>
                            <td><?= $row['judul'];?></td>
                            <td><?= $row['jml'];?></td>
                        </tr>
                <?php
                    }                
                ?>
            </tbody>
            </table>           
        </div>
    </div>
</body>
</html>
