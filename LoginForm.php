<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" href="LogInCSS.css">
    <title>Login Page</title>
</head>
<body>

    <?php
        session_start();
        //muncul pesan error
        if(isset($_SESSION['error'])){
    ?>

    <div class="alert" role="alert">
        <center><?=$_SESSION['error']?></center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
    </button>
    </div>

    <?php
  }
  ?>

    <h2>LogIn</h2>
    <div class="container">
        <form action="SessionLoginMultiProses.php" method="POST">
            <input type="text" class="a" name="ni" id="ni" placeholder="Nomor Induk/Username"><br>
            <input type="password" class="a" name="password" id="password" placeholder="Password"><br>
            <!-- <button type="submit" class="login" name="login" id="login" value="login"> LogIn
            <button type="submit" class="register" name="register" id="register" value="register">  <a href="RegisterForm.html">Register</a>  -->
            <input class="login" type="submit" value="Login"><br>
            <!-- <a href="RegisterForm.html"><input class="register" type="button" value="Register"></a> -->
        </form>
        <br>
        
    </div>

</body>
</html>
