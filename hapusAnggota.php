<?php
    include "koneksiDB.php";

    $id=$_GET['id'];

    $query="DELETE FROM user WHERE id_user='$id'";
    $result=mysqli_query($connect,$query);

    if($result){
        echo "<script>alert('Data berhasil dihapus');</script>";
        header('Location: DataAnggota.php');
    }else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
?>