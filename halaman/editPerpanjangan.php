<?php
    session_start();
    include "../proses/koneksiDB.php";
?>
<html>
<head>
        <title>Perpanjangan</title>
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
                <li class="nm">
                    <span>Akun: <?=$_SESSION['name']?></span> <i class="fa fa-angle-down"></i>
                </li>
            </ul>
    </div>
    <a href="waldan"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
            <ul>
                <div class="menu"></div>
                <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                <li><a href="../halaman/ProfilPerpus.html"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
                <li><a href="../halaman/KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
                <li><a href="../halaman/Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
            </ul>
        </nav>
        <script src="script.js"></script>
        <?php            
            $id=$_GET['id'];
            $query="SELECT * FROM detail_pinjam dp
            LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
            WHERE idDetail='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <div class="container">
            <table class="table2">
                <form action="../proses/prosesPerpanjangan.php" method="get">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {                                            
                    ?>
                    <thead>
                        <tr>
                            <th colspan="2">
                                PERPANJANGAN PEMINJAMAN
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id Detail</td>
                            <td><input type="number" name='id' value="<?php echo $row['idDetail'];?>" readonly></td>
                        </tr>   
                        <tr>
                            <td class="kolom1">Id Peminjaman</td>
                            <td><input type="number" name='idPm' value="<?php echo $row['idPeminjaman'];?>" readonly></td>
                        </tr>               
                        <tr>
                           <td>Tanggal Kembali</td>
                           <td><input type="date" name="kembali" value="<?php echo $row['tglKembali'];?>"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <input class="edit" type="submit" name="edit" value='Edit'>
                            </th>
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