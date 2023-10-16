<?php 
    $mahasiswa = [
        [
            "nama" => "Dodi",
            "nrp" => "123456",
            "email" => "dodi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "dodi.jpg"
        ],
        [
            "nama" => "Mulya",
            "nrp" => "234567",
            "email" => "mulya@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "mulya.jpg"
        ],      
        [
            "nama" => "Anto",
            "nrp" => "33333333",
            "email" => "anto@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "anto.jpg"
        ],      
        [
            "nama" => "Iin",
            "nrp" => "222222",
            "email" => "iin@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "iin.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <?php foreach ($mahasiswa as $m) :?>
        <img src="./img/<?= $m["gambar"] ?>" alt="Foto Profil">
        <ul>
            <li>Nama : <?= $m["nama"]?></li>
            <li>NRP : <?= $m["nrp"]?></li>
            <li>Email : <?= $m["email"]?></li>
            <li>Jurusan : <?= $m["jurusan"]?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
