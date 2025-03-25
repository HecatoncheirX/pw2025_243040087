<?php

// Data mahasiswa dalam array asosiatif
$mahasiswa = [
    [
        "nama" => "Muhammad Farrel Triputra Alfarizqi", 
        "nrp" => "243040087", 
        "email" => "farrel@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "farrel.jpg"
    ],

    [
        "nama" => "Muhammad Fatur Rahman", 
        "nrp" => "243040094", 
        "email" => "fatur@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "fatur.jpg"
    ],

    [
        "nama" => "M Ali Fauzi JR", 
        "nrp" => "243040079", 
        "email" => "ali@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "ali.jpg"
    ],

    [
        "nama" => "Moch Raffi KH", 
        "nrp" => "243040071", 
        "email" => "raffi@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "raffi.jpg"
    
    ],
    [
        "nama" => "Muhammad Nur Salam", 
        "nrp" => "243040083", 
        "email" => "alam@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "alam.jpg"
    ],

    [
        "nama" => "Rizky Prayoga", 
        "nrp" => "243040066", 
        "email" => "rizky@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "rizky.jpg"
    ],

    [
        "nama" => "Yaiza Ananda", 
        "nrp" => "243040077", 
        "email" => "Yaiza@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "yaiza.jpg"
    ],

    [
        "nama" => "Muhammad Aditya Prahaz", 
        "nrp" => "243040096", 
        "email" => "Aditya@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "aditya.jpg"
    ],

    [
        "nama" => "Billy Wicaksono", 
        "nrp" => "243040090", 
        "email" => "Billy@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "Billy.jpg"
    ],

    [
        "nama" => "AKbar Putra Pamungkas", 
        "nrp" => "243040093", 
        "email" => "akbar@email.com", 
        "jurusan" => "Informatika", 
        "gambar" => "akbar.jpg"
    ]
];

?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
