<?php
    include "koneksiDB.php";

    $id=$_GET['id'];
    $kode=$_GET['kode'];
    $judul=$_GET['judul'];
    $pengarang=$_GET['pengarang'];
    $penerbit=$_GET['penerbit'];
    $tahun=$_GET['tahunTerbit'];

    $query="UPDATE buku b,penerbit p SET b.kode_buku='$kode',b.judul='$judul',p.nama_penerbit='$penerbit',
    b.tahun_terbit='$tahun' WHERE idBuku='$id' AND p.id_penerbit==b.id_penerbit";
    $result=mysqli_query($connect,$query);

    if ($result) {
        echo "<script>alert('Status berhasil diubah');</script>";
        header('Location: DataBuku.php');
    }else{
        echo "<script>alert('Status gagal diubah');</script>";
        header('Location: editBukuFormAdmin.php');
    }
?>