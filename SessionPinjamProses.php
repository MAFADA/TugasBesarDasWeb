<?php
    session_start();
    include "koneksiDB.php";

    $idBuku=$_GET['id'];
    $idUser=$_SESSION['id_user'];
    $pinjam=$_GET['tglPinjam'];
    $kembali=$_GET['tglKembali'];
    $jumlah=$_GET['jumlah'];

    $sql="INSERT INTO peminjaman(id_user) VALUES('$idUser');";
    $sql .="SELECT * FROM peminjaman WHERE id_user='$idUser'";
    $query=mysqli_multi_query($connect,$sql);

    $sql1="INSERT INTO detail_pinjam(idPeminjaman,idBuku,tglPinjam,tglKembali,jml)VALUES('$idPeminjaman','$idBuku','$pinjam','$kembali',$jumlah);";
    $query1=mysqli_query($connect,$sql1);
    // $sql.=mysqli_query($connect,"SELECT pm.idPeminjaman FROM detail_pinjam dp
    // LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
    // WHERE pm.id_user='$idUser';");
    
    header('Location: Peminjaman.php');
?>