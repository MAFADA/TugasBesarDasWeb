<?php
    // auto connect mysql dengan koneksi.php
    include "koneksiDB.php";

    $username=$_POST['username'];//mengambil data dari username
    $password=md5($_POST['password']);//mengambil data dari password

    $query="SELECT * FROM anggota WHERE noInduk='$username' and password='$password';";
    $result=mysqli_query($connect,$query);//dapat digunakan untuk melakukan kueri terhadap database.
    $row=mysqli_fetch_assoc($result);//digunakan untuk mengambil baris hasil sebagai array asosiatif. Catatan: Nama kolom yang dikembalikan dari fungsi ini peka huruf besar / kecil(Case-sensitive).

    if($row['level']==1){
        echo "Anda berhasil login,silahkan menuju "; ?>
        <a href="">Halaman HOME</a>
        <?php
    }else if($row['level']==2){
        echo "Anda berhasil login,silahkan menuju "; ?>
        <a href="HalamanUtama.html">Halaman HOME</a>
        <?php
    }else{
        echo "Anda gagal login, silahkan ";?>
        <a href="LoginForm.html">Login Kembali</a>
    <?php
        echo mysqli_error($connect);
    }
    ?>