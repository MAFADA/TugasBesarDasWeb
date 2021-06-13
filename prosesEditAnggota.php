<?php
    include "koneksiDB.php";

    $id=$_GET['id'];
    $noInduk=$_GET['no'];
    $nama=$_GET['nama'];
    $alamat=$_GET['alamat'];
    $hp=$_GET['hp'];
    $tahun=$_GET['terima'];

    $query="UPDATE user SET noInduk='$noInduk',nama='$nama',alamat='$alamat',noHp='$hp',tglTerima='$tahun' 
    WHERE id_user='$id'";
    $result=mysqli_query($connect,$query);

    if ($result) {
        echo "<script>alert('Status berhasil diubah');</script>";
        header('Location: DataAnggota.php');
    }else{
        echo "<script>alert('Status gagal diubah');</script>";
        header('Location: editDataAnggota.php');
    }
?>