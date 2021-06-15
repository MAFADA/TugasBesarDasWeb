<?php
    session_start();
    include "../proses/koneksiDB.php";

    $idBuku=$_GET['id'];
    $idUser=$_SESSION['id_user'];
    $pinjam=$_GET['tglPinjam'];
    $kembali=$_GET['tglKembali'];
    $jumlah=$_GET['jumlah'];

    $insert=mysqli_query($connect,"INSERT INTO peminjaman VALUES('','$idUser','$pinjam','$kembali','');");
    if ($insert) {
        
        $masuk=mysqli_query($connect,"SELECT idPeminjaman FROM peminjaman ORDER BY DESC LIMIT 1");
        if ($masuk) {
            $input=mysqli_query($connect,"INSERT INTO detail_pinjam VALUES('',SELECT idPeminjaman FROM peminjaman ORDER BY DESC LIMIT 1,'$idBuku',$jumlah,'');");    
            if ($input) {
                echo "<script> alert('Data berhasil ditambah');</script>";
                header('Location: ../halaman/Peminjaman.php');
            }else {
                echo "Gagal".mysqli_error($connect);            
            }
        }
        
    }
    // $sql.="INSERT INTO detail_pinjam VALUES('',(SELECT id_peminjaman FROM peminjaman DESC LIMIT 1),'$idBuku',$jumlah,'Belum Kembali');";
    // $query=mysqli_multi_query($connect,$sql);
   
    // $sql.=mysqli_query($connect,"SELECT pm.idPeminjaman FROM detail_pinjam dp
    // LEFT OUTER JOIN peminjaman pm ON pm.idPeminjaman=dp.idPeminjaman
    // WHERE pm.id_user='$idUser';");
?>