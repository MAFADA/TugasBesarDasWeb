<?php
    include "koneksiDB.php";

    $id=$_GET['id'];
    $status=$_GET['status'];

    $query="UPDATE detail_pinjam SET status='$status' 
    WHERE idDetail='$id'";
    $result=mysqli_query($connect,$query);

    if ($result) {
        echo "<script>alert('Status berhasil diubah');</script>";
        header('Location: TransaksiAdmin.php');
    }else{
        echo "<script>alert('Status gagal diubah');</script>";
        header('Location: editTransaksiFormAdmin.php');
    }
?>