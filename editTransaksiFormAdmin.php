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
            $query="SELECT * FROM detail_pinjam WHERE idDetail='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <div class="container">
            <table class="table2">
                <form action="prosesEditTrAdmin.php" method="get">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {                                            
                    ?>
                    <thead>
                        <tr>
                            <th colspan="2">
                                PERUBAHAN DATA TRANSAKSI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="kolom1">Id</td>
                            <td><input type="number" name='id' value="<?php echo $row['idDetail'];?>" readonly></td>
                        </tr>
                        <tr>
                           <td>Status</td>
                           <td><input type="text" name="status" value="<?php echo $row['status'];?>"></td>
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