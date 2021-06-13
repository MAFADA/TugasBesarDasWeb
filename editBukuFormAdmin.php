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

        <!-- akhir side bar -->
        <?php
            include "koneksiDB.php";
            $id=$_GET['id'];
            $query="SELECT * FROM buku b
            LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit WHERE idBuku='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <div class="container">
            <table class="table2">
                <form action="prosesEditBuku.php" method="get">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {                                            
                    ?>
                    <thead>
                        <tr>
                            <th colspan="2">
                                PERUBAHAN DATA BUKU
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id</td>
                            <td><input class="a" type="number" name='id' value="<?php echo $row['idBuku'];?>" readonly></td>
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
                           <td>Pengarang</td>
                           <td><input class="a" type="text" name="pengarang" value="<?php echo $row['pengarang'];?>"></td>
                        </tr>
                        <tr>
                           <td>Penerbit</td>
                           <td><input class="a" type="text" name="penerbit" value="<?php echo $row['nama_penerbit'];?>"></td>
                        </tr>
                        <tr>
                           <td>Tahun Terbit</td>
                           <td><input class="a" type="number" name="tahunTerbit" value="<?php echo $row['tahun_terbit'];?>"></td>
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