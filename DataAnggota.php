<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="styleCSS.css">
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Perpustakaan</h4>
        </div>

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
        <div class="list-table">
            <table>
                <tr>
                    <th>No</th>
                    <th>No.Induk</th>
                    <th>Nama Lengkap</th>                    
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Tanggal Diterima</th>
                </tr>
            </table>
            <?php
                include "koneksiDB.php";

                $query="SELECT id_user,noInduk,nama,alamat,noHp,tglTerima 
                FROM user";
                $result = mysqli_query($connect,$query);

                if (mysqli_num_rows($result)) {
                    # code...
                }
            ?>
        </div>
        
        
    </div>
</body>
</html>
