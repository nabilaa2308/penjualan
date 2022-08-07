<?php
session_start();
if( isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
include 'database/koneksi.php'; 
 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query ($connection, "SELECT * FROM user WHERE username ='$username'");

    //cek username
    if(mysqli_num_rows($sql) === 1 ){

        //cek password
        $row = mysqli_fetch_assoc($sql);
       if( password_verify($password, $row["password"]) ) {
        //set session
        $_SESSION['login'] = true;
        header("location : index.php");
        exit;
       }
    }else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
    <title>Login</title>
</head>
<body>
 
    <div class="container">
        <form action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php?login">Register</a></p>
        </form>
    </div>
</body>
</html>