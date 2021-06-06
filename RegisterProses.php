<?php
    include "koneksi.php";

    $noInduk=$_GET['noInduk'];
    $nama=$_GET['Nama'];
    $nim=$_GET['nim'];
    $jenisKelamin=$_GET['jenisKelamin'];
    $alamat=$_GET['Alamat'];
    $nohp=$_GET['noHp'];
    $tglTerima=$_GET['tglTerima'];

    $sql="INSERT INTO user() VALUES ();";

    if(mysqli_query($connect,$sql)) {
        echo "Data berhasil ditambahkan";?>
        <a href="LoginForm.html">Login Page</a>
    <?php    
    }else{
        echo "Data gagal ditambahkan <br>".mysqli_error($connect);
    }?>
        <a href="RegisterForm.html">Register Form</a>
    <?php
    mysqli_close($connect);
    ?>