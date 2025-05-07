<?php
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // cek username dan password
    if ($_POST["username"] == "Valon" && $_POST["password"] == "Endmin433") {
        // jika benar, redirect ke halaman admin
        header ("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}



?>

<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
    <div class="login-tab">
        <h1>ENDFIELD</h1>

        <div class="login-error">
            <?php if( isset($error) ) : ?>
                <p> Wrong Username / Password</p>
            <?php endif; ?>
        </div>
        

        <div class="login-info">
            <form action="" method="post">
                <div class="login-insert">
                    <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username">
                    </li>
                    <br>
                    <li>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password">
                    </li>
                </div>

                <div class="login-button">
                    <li>
                        <button type="submit" name="submit">LOGIN</button>
                    </li>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>