<?php

// var_dump($_SERVER);

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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>

            <li>
                <a href="latihan2.php?nama=<?= $mhs['nama']; ?>&nrp=<?= $mhs['nrp']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>">
                    <?= $mhs["nama"]; ?></a>
            </li>

        <?php endforeach ?>
    </ul>
</body>

</html>