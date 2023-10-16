<?php 
$mahasiswa = [
    ["Sandhika Gal", "123456789", "Teknik Informatika", "sandhikagalih@gmail.com"],
    ["Sandhika Gali", "123456789", "Teknik Informatika", "sandhikagalih@gmail.com"],
    ["Sandhika Ga", "123456789", "Teknik Informatika", "sandhikagalih@gmail.com"],
    ["Sandhika Galih", "123456789", "Teknik Informatika", "sandhikagalih@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $m) : ?>
            <li>Nama : <?php echo $m[0]; ?></li>
            <li>NPWP : <?php echo $m[1]; ?></li>
            <li>Jurusan : <?php echo $m[2]; ?></li>
            <li>Email : <?php echo $m[3]; ?></li><br>
        <?php endforeach; ?>
    </ul>
</body>
</html>