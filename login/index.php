<?php 
include '../database/koneksi.php'; 
session_start();
 
if (isset($_POST['login'])) {
    $username = $_POST['usernmae'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 
    <title>Login</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="../index.php" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="username" placeholder="username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>