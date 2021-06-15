<?php
    include "../proses/koneksiDB.php";

    $id=$_GET['id'];
    $idPeminjaman=$_GET['idPm'];
    $tglKembali=$_GET['kembali'];

    $query="UPDATE peminjaman SET tglKembali='$tglKembali' 
    WHERE idPeminjaman='$idPeminjaman'";
    $result=mysqli_query($connect,$query);

    if ($result) {
        echo "<script>alert('Status berhasil diubah');</script>";
        header('Location: ../halaman/Peminjaman.php');
    }else{
        echo "<script>alert('Status gagal diubah');</script>";
        header('Location: ../halaman/editPerpanjangan.php');
    }
?>