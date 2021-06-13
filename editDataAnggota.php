<html>
    <head>
        <title>Edit Status</title>
    </head>
    <body>
        <?php
            include "koneksiDB.php";
            $id=$_GET['id'];
            $query="SELECT * FROM user WHERE id_user='$id';";
            $result=mysqli_query($connect,$query);
        ?>
        <table>
            <form action="prosesEditAnggota.php" method="get">
                <?php
                    while ($row=mysqli_fetch_array($result)) {                                            
                ?>
                <tr>
                    <td>Id</td>
                    <td><input type="number" name='id' value="<?php echo $row['id_user'];?>" readonly></td>
                </tr>
                <tr>
                   <td>No Induk</td>
                   <td><input type="text" name="no" value="<?php echo $row['noInduk'];?>"></td>
                </tr>
                <tr>
                   <td>Nama</td>
                   <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
                </tr>
                <tr>
                   <td>Alamat</td>
                   <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
                </tr>
                <tr>
                   <td>No HP</td>
                   <td><input type="text" name="hp" value="<?php echo $row['noHp'];?>"></td>
                </tr>
                <tr>
                   <td>Tanggal Diterima</td>
                   <td><input type="date" name="terima" value="<?php echo $row['tglTerima'];?>"></td>
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