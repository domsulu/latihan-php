<?php
    if( !isset($_GET['nama']) ||
        !isset($_GET['nrp']) ||
        !isset($_GET['email']) ||
        !isset($_GET['jurusan'])) {
            header("Location: latihan1.php"); //syntax header : header("...")
            exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul> 
        <!-- <img src="../pertemuan6/img/Anto.jpg" alt=""> -->
        <li><?php echo $_GET['nama'] ?></li>
        <li><?php echo $_GET['nrp'] ?></li>
        <li><?php echo $_GET['email'] ?></li>
        <li><?php echo $_GET['jurusan'] ?></li>
    </ul>
</body>
</html>