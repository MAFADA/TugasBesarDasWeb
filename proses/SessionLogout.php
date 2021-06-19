<?php
    session_start();
    session_destroy();

    echo"Anda berhasil logout";
?>
<br>
<a href="../halaman/LoginForm.php">Login Form</a>