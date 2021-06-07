<?php
    // auto connect mysql dengan koneksi.php
    include "koneksiDB.php";

    $username=$_POST['username'];//mengambil data dari username
    $password=md5($_POST['password']);//mengambil data dari password

    $query="SELECT * FROM anggota WHERE noInduk='$username' and password='$password';";
    $result=mysqli_query($connect,$query);//dapat digunakan untuk melakukan kueri terhadap database.
    $cek=mysqli_num_rows($result);

    if($cek>0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['status']='login';?>
        Login Berhasil
        <a href="HalamanUtama.html">Halaman HOME</a>
        <?php
    }else{
        ?>
        Anda gagal login, silahkan
        <a href="LoginForm.html">Login Kembali</a>
    <?php
        echo mysqli_error($connect);
    }
    ?>