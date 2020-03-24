<!doctype html>
<html lang="en">

<head>
    <title>PERPUSTAKAAN</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <?php
    include 'config.php';
    ?>
</head>

<body>
    <div class="form">
        <img src="icon.png" class="avatar">
        <h2 class="welcome"> LogIn</h2>
        <form action="login.php" method="POST">
            <input class="input" type="text" name="username" placeholder="USERNAME"><br>
            <input class="input" type="password" name="password" placeholder="PASSWORD"><br><br>
            <input class="enter" type="submit" name="login" placeholder="LOGIN"><br>
            <br><br>
        </form>
        <h2><a href="register.php" class="enter">Registrasi</a></h2>
    </div>
</body>
</html>
<?php
include 'config.php';
if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $pass = md5($password);

    mysqli_query($koneksi, "INSERT into user(username,password) values ('$username,  $pass')");
}
?>
