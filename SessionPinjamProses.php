<?php
    include "koneksi.php";
    session_start();
    $query="SELECT * FROM buku;";
    $query1="SELECT * FROM peminjaman;";
    $result1=mysqli_query($connect,$query);
    $result=mysqli_query($connect,$query);
    $row1=mysqli_fetch_array($result1);
    $row=mysqli_fetch_array($result);

    $judul=$_GET['judul'];
    $jmlh=$_GET['jml'];
    $datePinjam=$_GET['datepinjam'];
    $dateKembali=$_GET['datekembali'];

    // pake loop buat cari data yg cocok untuk 
    // input ke database transaksi dan detail transaksi

        if($row['judul']==$judul){
            $peminjaman="INSERT INTO peminjaman(idAnggota,tglPinjam,tglKembali)
            VALUES('$row1['idAnggota']','$datePinjam','$dateKembali');";
            
            $detail_pinjam="INSERT INTO detail_pinjam(idPeminjaman,idBuku,jml) 
            VALUES('$id_pinjam','$row['idBuku']',$jmlh);";
        }else{
            $_SESSION['error']='Data Buku yang anda masukkan tidak ditemukan';
            echo mysqli_error($connect);
        }
?>