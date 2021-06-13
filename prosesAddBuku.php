<?php
    include "koneksiDB.php";

   $kode=$_GET['kode'];
   $judul=$_GET['judul'];
   $pengarang=$_GET['pengarang'];
   $penerbit=$_GET['penerbit'];
   $tahun=$_GET['tahunTerbit'];

    $sql="INSERT INTO buku(kode_buku,judul,pengarang,penerbit,tahun_terbit)
     VALUES ('$kode','$judul','$pengarang','$penerbit','$tahun');";

    if(mysqli_query($connect,$sql)) {
        echo "<script>alert('Berhasil ditambah');</script>";
        header('Location: DataBuku.php');
   
    }else{
        echo "<script>alert('Gagal ditambah');</script>";
        header('Location: addBuku.php');
    }
    mysqli_close($connect);
    ?>