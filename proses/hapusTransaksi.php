<?php
    include "../proses/koneksiDB.php";

    $id=$_GET['id'];

    $query="DELETE FROM detail_pinjam WHERE idDetail='$id'";
    $result=mysqli_query($connect,$query);

    if($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        header('Location: ../halaman/TransaksiAdmin.php');
    }else {
        echo "<script>alert('Data gagal dihapus');</script>";
        header('Location: ../halaman/TransaksiAdmin.php');
    }
?>