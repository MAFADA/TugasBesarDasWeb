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
        
        <div class="container">
            <table class="table2">
                <form action="prosesAddBuku.php" method="get">                
                    <thead>
                        <tr>
                            <th colspan="2">
                               TAMBAH DATA BUKU
                            </th>
                        </tr>
                    </thead>
                    <tbody>                    
                        <tr>
                           <td>Kode Buku</td>
                           <td><input class="a" type="text" name="kode"></td>
                        </tr>
                        <tr>
                           <td>Judul</td>
                           <td><input class="a" type="text" name="judul"></td>
                        </tr>
                        <tr>
                           <td>Pengarang</td>
                           <td><input class="a" type="text" name="pengarang"></td>
                        </tr>
                        <tr>
                           <td>Penerbit</td>
                           <td><input class="a" type="text" name="penerbit"></td>
                        </tr>
                        <tr>
                           <td>Tahun Terbit</td>
                           <td><input class="a" type="number" name="tahunTerbit"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <input class="register" type="submit" name="tambah" value='tambah'>
                            </th>
                        </tr>                
                    </tfoot>                                   
                </form>
            </table>
        </div>
    </body>
</html>