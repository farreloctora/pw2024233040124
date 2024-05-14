<?php

$mahasiswa = [
    [
        "nama" => "M.Farrel Octora R",
        "nrp" => "233040124",
        "email" => "m.farreloctorar@unpas.ac.id",
    ],
    [
        "nama" => "Rina Puspita",
        "nrp" => "234050102",
        "email" => "rina.puspita@gmail.com",
    ],
    [
        "nama" => "Agus Supriyadi",
        "nrp" => "234050103",
        "email" => "agus.supriyadi@gmail.com",
    ],
    [
        "nama" => "Siti Aminah",
        "nrp" => "234050104",
        "email" => "siti.aminah@gmail.com",
    ],
    [
        "nama" => "Dewi Lestari",
        "nrp" => "234050105",
        "email" => "dewi.lestari@gmail.com",
    ],
    [
        "nama" => "Fajar Nugroho",
        "nrp" => "234050106",
        "email" => "fajar.nugroho@gmail.com",
    ],
    [
        "nama" => "Lina Marlina",
        "nrp" => "234050107",
        "email" => "lina.marlina@gmail.com",
    ],
    [
        "nama" => "Adi Putra",
        "nrp" => "234050108",
        "email" => "adi.putra@gmail.com",
    ],
    [
        "nama" => "Yudi Hartono",
        "nrp" => "234050109",
        "email" => "yudi.hartono@gmail.com",
    ],
    [
        "nama" => "Nina Permata",
        "nrp" => "234050110",
        "email" => "nina.permata@gmail.com",
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa Teknik Informatika Unpas</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>