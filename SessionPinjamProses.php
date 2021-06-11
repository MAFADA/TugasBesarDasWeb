<?php
    session_start();
    include "koneksiDB.php";

    $judul=$_GET['judul'];
    $jmlh=$_GET['jumlah'];
    $datePinjam=$_GET['pinjam'];
    $dateKembali=$_GET['kembali'];

    $sql="SELECT * FROM buku WHERE judul='$judul';";
    // $query=$connect->query($sql); //menjalankan kueri database
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result);
    $idBuku=$row['idBuku'];

    $peminjaman=$connect->query("INSERT INTO peminjaman(tglPinjam,tglKembali)
                VALUES('$datePinjam','$dateKembali')");
    $detail_pinjam=$connect->query("INSERT INTO detail_pinjam(idBuku,jml) 
                     VALUES($idBuku',$jmlh)");

?>