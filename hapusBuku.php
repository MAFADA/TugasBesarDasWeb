<?php
    include "koneksiDB.php";

    $id=$_GET['id'];

    $query="DELETE FROM buku WHERE idBuku='$id'";
    $result=mysqli_query($connect,$query);

    if($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        header('Location: DataBuku.php');
    }else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
?>