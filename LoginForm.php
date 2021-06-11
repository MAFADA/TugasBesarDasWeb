<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="styleCSS.css">
    <script type="text/JavaScript" src="jquery-3.6.0.min.js"></script>
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Login Page</title>
</head>
<body>

<!-- Side bar -->

<nav>
        <div class="logo">
            <h4>Perpustakaan</h4>
        </div>

        <ul>
            <div class="menu"></div>
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="#"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="#"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>

<!-- akhir side bar -->

    <?php
        session_start();
        //muncul pesan error
        // if(isset($_SESSION['error'])){
    ?>

    <!-- <div class="alert" role="alert">
        <center>?=$_SESSION['error']?></center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
    </button>
    </div> -->
    <h2>LogIn</h2>
    </div>

    <?php
  }
  ?>
    <div class="container">
        <form action="SessionLoginMultiProses.php" method="POST">
            <!--        <div class='form-group'>
                <label for="username">Username</label>
                <input type="text" name="ni" id="ni" class='a' 
                placeholder='Masukkan username' autofocus>
            </div>
            <div class='form-group'>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class='a' 
                placeholder='Masukkan password' autofocus>
            </div> -->
            <input type="text" class="a" name="ni" id="ni" placeholder="Nomor Induk/Username"><br>
            <input type="password" class="a" name="password" id="password" placeholder="Password"><br>
            <label for="Level">Level</label>
            <select name="level" class='form-control' id='level'>
                <option value="">-- Masuk Sebagai --</option>
                <option value="2">Operator</option>
                <option value="1">Admin</option>
            </select>
            <!-- <button type="submit" class="login" name="login" id="login" value="login"> LogIn
            <button type="submit" class="register" name="register" id="register" value="register">  <a href="RegisterForm.html">Register</a>  -->
            <input class="login" type="submit" value="Login"><br>
        </form>
        <a href="RegisterForm.html"><input class="register" type="button" value="Register"></a>
        <br>
        
    </div>
</body>
</html>
