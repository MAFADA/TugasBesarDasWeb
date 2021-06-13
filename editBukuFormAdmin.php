<html>
    <head>
        <title>Edit Status</title>
    </head>
    <body>
        <?php
            include "koneksiDB.php";
            $id=$_GET['id'];
            $query="SELECT * FROM buku b
            LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit WHERE idBuku='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <table>
            <form action="prosesEditBuku.php" method="get">
                <?php
                    while ($row=mysqli_fetch_array($result)) {                                            
                ?>
                <tr>
                    <td>Id</td>
                    <td><input type="number" name='id' value="<?php echo $row['idBuku'];?>" readonly></td>
                </tr>
                <tr>
                   <td>Kode Buku</td>
                   <td><input type="text" name="kode" value="<?php echo $row['kode_buku'];?>"></td>
                </tr>
                <tr>
                   <td>Judul</td>
                   <td><input type="text" name="judul" value="<?php echo $row['judul'];?>"></td>
                </tr>
                <tr>
                   <td>Pengarang</td>
                   <td><input type="text" name="pengarang" value="<?php echo $row['pengarang'];?>"></td>
                </tr>
                <tr>
                   <td>Penerbit</td>
                   <td><input type="text" name="penerbit" value="<?php echo $row['nama_penerbit'];?>"></td>
                </tr>
                <tr>
                   <td>Tahun Terbit</td>
                   <td><input type="number" name="tahunTerbit" value="<?php echo $row['tahun_terbit'];?>"></td>
                </tr>
                <tr>
                    <input type="submit" name="edit" value='Edit'>
                </tr>                
                <?php
                    }
                ?>
            </form>
        </table>
    </body>
</html>