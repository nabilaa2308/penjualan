<?php 
 
include 'database/koneksi.php'; 
 
if (isset($_POST['register'])) {

    $username = strtolower(stripslashes(($_POST['username'])));
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //cek konfirmasi password
    if ( $password !== $cpassword ) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($connection, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                echo "<script>alert('Selamat, Registrasi Berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="assets/css/style.css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>