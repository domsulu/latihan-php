<?php 
// mengecek apakah tombol submit sudah di klik atau belum
if( isset($_POST['submit']) ) {

    if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
        header('Location: admin.php');
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Silahkan Login</h1>

    <?php if (isset($error)) :?>
        <p style="color: red">username / password salah!</p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>