
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form action="index.php?page=login" method="POST">

            <ul>
                <li>
                    <label for="username">Username : </label>
                    <br>
                    <input type="text" name="username" id="username">
                    <br>
                </li>
                <li>
                    <label for="email">Email : </label>
                    <br>
                    <input type="text" name="email" id="email">
                    <br>
                </li>
                <li>
                    <label for="password">Password : </label>
                    <br>
                    <input type="password" name="password" id="password">
                    <br>
                </li>
                <li>
                    <label for="password2">Konfirmasi Password : </label>
                    <input type="password" name="password2" id="password2">
                </li>
            </ul>

                <button type="submit" name="daftar">Daftar</button>
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>