<?php
session_start();
include "koneksiDB.php";

$idBuku=$_GET['id'];
$idUser=$_SESSION['id_user'];
$jumlah=$_GET['jumlah'];

$result=mysqli_fetch_array($sql);
$idPeminjaman=$result['idPeminjaman'];
$sql.=mysqli_multi_query($connect,"INSERT INTO detail_pinjam(idPeminjaman,idBuku,jml)VALUES('$idPeminjaman','$idBuku',$jumlah);");
?>