<?php
    include "koneksiDB.php";

    $noInduk=$_GET['ni'];
    $nama=$_GET['nama'];
    $username=$_GET['username'];
    $nim=$_GET['nim'];
    $jenisKelamin=$_GET['jk'];
    $alamat=$_GET['alamat'];
    $nohp=$_GET['noHp'];
    $tglTerima=$_GET['date'];
    $password=$_GET['password'];

    $sql="INSERT INTO user(noInduk,username,nama,nim,jenis_kelamin,alamat,noHp,tglTerima,password)
     VALUES ('$noInduk','$username','$nama','$nim','$jenisKelamin'
     ,'$alamat','$nohp','$tglTerima',md5('$password'));";

    if(mysqli_query($connect,$sql)) {
        echo "Register berhasil";?>
        <a href="LoginForm.php">Login Page</a>
    <?php    
    }else{
        echo "Data gagal ditambahkan <br>".mysqli_error($connect);
    }?>
        <a href="RegisterForm.html">Register Form</a>
    <?php
    mysqli_close($connect);
    ?>