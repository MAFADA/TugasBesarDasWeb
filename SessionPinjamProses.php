<?php
    include "koneksi.php";
    session_start();
    $query="SELECT * FROM buku;";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_array($result);

    $judul=$_GET['judul'];
    $jmlh=$_GET['jml'];

    // pake loop buat cari data yg cocok untuk 
    // input ke database transaksi dan detail transaksi

        if($row['judul']==$judul){
            $sql="INSERT INTO detail_pinjam(idPeminjaman,idBuku,jml) 
            VALUES('$id_pinjam','$row['idBuku']',$jmlh);";
        }else{
            $_SESSION['error']='Data Buku yang anda masukkan tidak ditemukan';
            echo mysqli_error($connect);
        }
?>