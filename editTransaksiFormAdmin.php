<html>
    <head>
        <title>Edit Status</title>
    </head>
    <body>
        <?php
            include "koneksiDB.php";
            $id=$_GET['id'];
            $query="SELECT * FROM detail_pinjam WHERE idDetail='$id';";
            $result=mysqli_query($connect,$query);
        
        ?>
        <table>
            <form action="prosesEditTrAdmin.php" method="get">
                <?php
                    while ($row=mysqli_fetch_array($result)) {                                            
                ?>
                <tr>
                    <td>Id</td>
                    <td><input type="number" name='id' value="<?php echo $row['idDetail'];?>" readonly></td>
                </tr>
                <tr>
                   <td>Status</td>
                   <td><input type="text" name="status" value="<?php echo $row['status'];?>"></td>
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