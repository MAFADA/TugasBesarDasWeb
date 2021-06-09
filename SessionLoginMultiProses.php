<?php
    session_start();
    // auto connect mysql dengan koneksi.php
    include "koneksiDB.php";

    $username=$_POST['username'];//mengambil data dari username
    $password=md5($_POST['password']);//mengambil data dari password
    $level=$_POST['level'];

    if (empty($username) || empty($password)) {
        header('Location:LoginForm.html');
    }

    $sql="SELECT * FROM anggota WHERE username='$username' AND password='$password';";
    $query=$connect->query($sql);
    $result=$query->fetch_assoc();
    var_dump($result);
    // $result=mysqli_query($connect,$query);//dapat digunakan untuk melakukan kueri terhadap database.
    // $cek=mysqli_fetch_assoc($result);

    if($query->num_rows>0){        
        $_SESSION['username']=$result['username'];
        $_SESSION['id_user']=$result['id_user'];

        if ($result['id_level']==1) {
            header('Location:adminPage.php');
        }else{
            header('Location:HalamanUtama.php');
        }
    }else{
        $_SESSION['error']="Data yang anda masukkan salah,silahkan coba lagi";
        header('Location:LoginForm.php');
        echo mysqli_error($connect);
    }
    ?>