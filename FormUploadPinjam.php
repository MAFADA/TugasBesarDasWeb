<?php
session_start();
include "koneksiDB.php";
?>
<html>
    <head>
        <title>Edit Status</title>
        <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
        <link rel="stylesheet" type="text/css" href="styleCSS.css">
        <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <!-- Side bar -->

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

        <!-- akhir side bar -->
        <?php           
            $idBuku=$_GET['id'];
            $query="SELECT * FROM buku WHERE idBuku='$idBuku'";
            $result=mysqli_query($connect,$query);        
        ?>
        <div class="container">
            <table class="table2">
                <form action="SessionPinjamProses.php" method="get">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {                                            
                    ?>
                    <thead>
                        <tr>
                            <th colspan="2">
                                PEMINJAMAN BUKU
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id Buku</td>
                            <td><input class="a" type="number" name='id' value="<?php echo $idBuku;?>" readonly></td>
                        </tr>
                        <tr>
                           <td>Kode Buku</td>
                           <td><input class="a" type="text" name="kode" value="<?php echo $row['kode_buku'];?>"></td>
                        </tr>
                        <tr>
                           <td>Judul</td>
                           <td><input class="a" type="text" name="judul" value="<?php echo $row['judul'];?>"></td>
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
                                <input class="pinjam" type="submit" name="pinjam" value='pinjam'>
                            </th>
                            <form action="" method="get">
                            <th colspan="2">
                                <input class="konfirm" type="submit" name="konfirm" value='konfirm'>
                            </th>
                            </form>
                        </tr>                
                    </tfoot>                
                    <?php
                        }
                    ?>
                </form>
            </table>
        </div>
    </body>
</html>