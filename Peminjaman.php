<?php
    session_start();
    include "koneksiDB.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="styleCSS.css">
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Data Buku</title>
</head>
<body>
    <div id="logo">
        <h4>Perpustakaan</h4>
        <p>Akun: <?=$_SESSION['name']?></p>
    </div>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
    
    <div class="container">
        <br>
        <div class="list-table">            
            <br>

            <table class="table1">
                <tr>
                    <th>No</th>
                    <th>Peminjam</th>
                    <th>Kode buku</th>                    
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                <?php                   
                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT dp.idDetail,u.nama,b.kode_buku,b.judul,dp.tglPinjam,
                    dp.tglKembali,jml,status FROM detail_pinjam dp
                    LEFT OUTER JOIN buku b ON b.idBuku=dp.idBuku
                    LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit
                    LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
                    LEFT OUTER JOIN user u ON u.id_user=pm.id_user");
                
                    if (mysqli_num_rows($query)) {                                 
                        while ($row=mysqli_fetch_array($query)) {                                            
                    ?>
                            <tr class="tb">
                                <td><?php echo $row['idDetail']?></td>
                                <td><?php echo $row['nama']?></td>
                                <td><?php echo $row['kode_buku']?></td>
                                <td><?php echo $row['judul']?></td>
                                <td><?php echo $row['tglPinjam']?></td>
                                <td><?php echo $row['tglKembali']?></td>
                                <td><?php echo $row['jml']?></td>
                                <td><?php echo $row['status']?></td>
                                <td>
                                    <a class="pinjam" href="editPerpanjangan.php?id=<?php echo $row['idDetail'];?>">Perpanjang</a>                                    
                                </td>
                            </tr>
                <?php
                    }
                }                 
                ?>
            </table>           
        </div>
    </div>
</body>
</html>
