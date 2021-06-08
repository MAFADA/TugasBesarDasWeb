<?php
    include "koneksi.php";
    session_start();
    $query="SELECT * FROM buku;";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_array($result);

    $judul=$_GET['judul'];
    $jmlh=$_GET['jml'];

    if($row['judul']==$judul){
        $sql="INSERT INTO ;";
    }else{
        $_SESSION['error']='Data Buku yang anda masukkan tidak ditemukan';
        echo mysqli_error($connect);
    }
?>