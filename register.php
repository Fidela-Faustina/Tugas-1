<!DOCTYPE html>
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
        <img src="add1.png" class="avatar">
        <span class="welcome"> Registrasi</span>
        <form method="post">
            <input class="input" type="text" name="nama" placeholder="NAMA"><br>
            <input class="input" type="text" name="telp" placeholder="TELEPON"><br>
            <input class="input" type="email" name="email" placeholder="EMAIL"><br>
            <input class="input" type="text" name="username" placeholder="USERNAME"><br>
            <input class="input" type="password" name="password" placeholder="PASSWORD"><br>
            <input class="input" type="text" name="admin" placeholder="OTORITAS ACCESS"><br>
            <input class="enter" type="submit" name="simpan" placeholder="simpan"><br>
            <br><br>
            <br>
            <br>

        </form>
    </div>
</body>
</html>
<?php
include 'config.php';
if (@$_POST['simpan']) {
    $nama = @$_POST['nama'];
    $telp = @$_POST['telp'];
    $email = @$_POST['email'];
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $access = @$_POST['admin'];

    $query = ("INSERT INTO user(nama, telp, email, username, password, id_level)
            values ('$nama','$telp','$email','$username','$password','$access')");
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo "<div class='form'>
        <h3> SUCCESS</h3>
        <br/> Klik untuk <a href='index.php'>Login</a>
        </div>";
    } else {
        echo "failed";
    }
}

?>
