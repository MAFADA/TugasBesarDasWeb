<?php
    session_start();
    // auto connect mysql dengan koneksi.php
    include "../proses/koneksiDB.php";

    $username=$_POST['ni'];//mengambil data dari username
    $password=md5($_POST['password']);//mengambil data dari password
    $level=$_POST['level'];

    if (empty($username) || empty($password) || empty($level)) {
        header('Location: ../halaman/LoginForm.php');
    }

    $query=mysqli_query($connect,"SELECT * FROM user WHERE username='$username' AND password='$password' AND id_level='$level'");
    $result=mysqli_fetch_assoc($query);
    var_dump($result);
    // $cek=mysqli_num_rows($query);

    if(mysqli_num_rows($query) > 0){ 
        // while ($row=mysqli_fetch_assoc($query)) {            
            $_SESSION['name']=$result['username'];
            $_SESSION['id_user']=$result['id_user'];

            if ($result['id_level']==1) {
                echo "<script>alert('Anda masuk sebagai Admin');</script>";
                header('Location:../halaman/HalamanUtamaAdmin.php');
            }else{
                echo "<script>alert('Anda masuk sebagai Operator');</script>";
                header('Location:../halaman/HalamanUtama.php');
            }
        // }              
    }
    else{
        echo "<script>alert('Username dan Password Salah!');</script>";
        // $_SESSION['error']="Data yang anda masukkan salah,silahkan coba lagi";
        header('Location:../halaman/LoginForm.php');
    }
    ?>