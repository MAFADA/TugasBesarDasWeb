<?php
session_start();
    include "koneksiDB.php";

?>
<html>
    <head>
        <title>Edit Status</title>
    </head>
    <body>
        <?php            
            $id=$_GET['id'];
            $query="SELECT * FROM detail_pinjam dp
            LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
            WHERE idDetail='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <div class="container">
            <table class="table2">
                <form action="prosesPerpanjangan.php" method="get">
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