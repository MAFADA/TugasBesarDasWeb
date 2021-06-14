<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Anggota</title>
        <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
        <link rel="stylesheet" type="text/css" href="styleCSS.css">
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
                <li><a href="#"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
                <li><a href="KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
                <li><a href="Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
            </ul>
        </nav>
        <script src="script.js"></script>
        <?php
            include "koneksiDB.php";
            $id=$_GET['id'];
            $query="SELECT * FROM user WHERE id_user='$id';";
            $result=mysqli_query($connect,$query);
        ?>
        <div class="container">
        <br>
        <h1>EDIT DATA ANGGOTA</h1>
        <br>
            <table class="table2">
                <form action="prosesEditAnggota.php" method="get">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {                                            
                    ?>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id</td>
                            <td><input class="a" type="number" name='id' value="<?php echo $row['id_user'];?>" readonly></td>
                        </tr>
                        <tr>
                           <td>No Induk</td>
                           <td><input class="a" type="text" name="no" value="<?php echo $row['noInduk'];?>"></td>
                        </tr>
                        <tr>
                           <td>Nama</td>
                           <td><input class="a" type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
                        </tr>
                        <tr>
                           <td>Alamat</td>
                           <td><input class="a" type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
                        </tr>
                        <tr>
                           <td>No HP</td>
                           <td><input class="a" type="text" name="hp" value="<?php echo $row['noHp'];?>"></td>
                        </tr>
                        <tr>
                           <td>Tanggal Diterima</td>
                           <td><input class="a" type="date" name="terima" value="<?php echo $row['tglTerima'];?>"></td>
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
    </body>
</html>