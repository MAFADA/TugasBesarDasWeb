<?php
session_start();
include "../proses/koneksiDB.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="../styleCSS.css">
    <script type="text/JavaScript" src="../jquery-3.6.0.min.js"></script>
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div class="heading">
        <div>
            <h4>Perpustakaan</h4>
        </div>
        <ul>
            <li class="nm"></li>
            <li>
                <p>Tanggal: <span id="tanggalwaktu"></span></p>
            </li>
        </ul>
    </div>
    <div class="container">
        <br>
        <h1>LOGIN</h1>
        <br>
        <form action="../proses/SessionLoginMultiProses.php" method="POST">
            <input type="text" class="a" name="ni" id="ni" placeholder="Nomor Induk/Username"><br>
            <input type="password" class="a" name="password" id="password" placeholder="Password"><br>
            <label for="Level">Level:</label>
            <select class="a" name="level" class='form-control' id='level'>
                <option value="">-- Masuk Sebagai --</option>
                <option value="2">Operator</option>
                <option value="1">Admin</option>
            </select><br>
            <!-- <button type="submit" class="login" name="login" id="login" value="login"> LogIn
            <button type="submit" class="register" name="register" id="register" value="register">  <a href="RegisterForm.html">Register</a>  -->
            <input class="login" type="submit" value="Login"><br>
        </form>
        <a href="../halaman/RegisterForm.html"><input class="register" type="button" value="Register"></a>
    </div>
    <script src="../script.js"></script>
</body>

</html>