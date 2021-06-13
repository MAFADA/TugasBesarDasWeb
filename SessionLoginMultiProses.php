<?php
    session_start();
    // auto connect mysql dengan koneksi.php
    include "koneksiDB.php";

    $username=$_POST['ni'];//mengambil data dari username
    $password=md5($_POST['password']);//mengambil data dari password
    $level=$_POST['level'];

    if (empty($username) || empty($password) || empty($level)) {
        header('Location: LoginForm.php');
    }

    $query=mysqli_query($connect,"SELECT * FROM user WHERE username='$username' AND password='$password' AND id_level='$level'");
    $cek=mysqli_num_rows($query);
   
    // $query=$connect->query($sql);
    
    // var_dump($result);
    // $result=mysqli_query($connect,$query);//dapat digunakan untuk melakukan kueri terhadap database.
    // $cek=mysqli_fetch_assoc($result);

    if($cek>0){ 
        while ($row=mysqli_fetch_assoc($query)) {
            $_SESSION['name']=$result['username'];
            $_SESSION['id_user']=$result['id_user'];

            if ($result['id_level']==1) {
                echo "<script>alert('Anda masuk sebagai Admin');</script>";
                // header('Location:adminPage.php');
            }else{
                echo "<script>alert('Anda masuk sebagai Operator');</script>";
                header('Location:HalamanUtama.html');
            }
        }              
    }
    else{
        echo "<script>alert('Username dan Password Salah!');</script>";
        // $_SESSION['error']="Data yang anda masukkan salah,silahkan coba lagi";
        // header('Location:LoginForm.php');
        // echo mysqli_error($connect);
    }
    ?>