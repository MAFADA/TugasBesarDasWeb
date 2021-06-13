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
            <form action="" method="get">            
                <input type="text" name='cari' placeholder='Cari buku'>
            </form>
            <br>

            <table class="table1">
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>                    
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th></th>
                </tr>
                <?php                   
                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT b.idBuku,b.kode_buku,b.judul,b.pengarang,p.nama_penerbit as Penerbit,b.tahun_terbit
                    FROM buku b
                    LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit;");
                    if (isset($_GET['cari'])) {
                        $query=mysqli_query($connect,"SELECT b.idBuku,b.kode_buku,b.judul,b.pengarang,p.nama_penerbit as Penerbit,b.tahun_terbit
                        FROM buku b
                        LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit
                        WHERE b.judul LIKE '%".$_GET['cari']."%'OR p.nama_penerbit  LIKE'%".$_GET['cari']."%'");
                    } 
                    if (mysqli_num_rows($query)) {                                 
                        while ($row=mysqli_fetch_array($query)) {                                            
                    ?>
                            <tr class="tb">
                                <td><?php echo $row['idBuku']?></td>
                                <td><?php echo $row['kode_buku']?></td>
                                <td><?php echo $row['judul']?></td>
                                <td><?php echo $row['pengarang']?></td>
                                <td><?php echo $row['Penerbit']?></td>
                                <td><?php echo $row['tahun_terbit']?></td>                        
                                <td>
                                    <a class="pinjam" href="FormUploadPinjam.php?id=<?php echo $row['idBuku'];?>">Pinjam</a>                                    
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
