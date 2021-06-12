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
                    <td>Kode Buku</td>
                    <td>Judul</td>                    
                    <td>Pengarang</td>
                    <td>Penerbit</td>
                    <td>Tahun Terbit</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksiDB.php";

                    $no=1;
                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT b.kode_buku,b.judul,b.pengarang,p.nama_penerbit as Penerbit,b.tahun_terbit
                    FROM buku b
                    LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit;");                
                    
                    while ($row=mysqli_fetch_array($query)) {                                            
                ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $row['kode_buku'];?></td>
                            <td><?= $row['judul'];?></td>
                            <td><?= $row['pengarang'];?></td>
                            <td><?= $row['Penerbit'];?></td>
                            <td><?= $row['tahun_terbit'];?></td>
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
