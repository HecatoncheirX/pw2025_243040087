<?php
if(isset($_GET['angka'])) {
    $angka = $_GET['angka'];
} else {
    $angka = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 6a - Kotak Angka Dinamis</title>
    <style>
        .kotak-angka {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
        
        .kotak-biru {
            background-color: #999888;
        }
        
        .kotak-putih {
            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
        }
        
        .baris {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Kotak Angka Dinamis</h2>
    
    <?php
    for($i = $angka; $i >= 1; $i--) {
        echo "<div class='baris'>";

        for($j = 1; $j <= $i; $j++) {
            $class = ($i % 2 == 0) ? 'kotak-biru' : 'kotak-putih';
            echo "<div class='kotak-angka $class'>$i</div>";
        }
        
        echo "</div>";
    }
    
    if($angka > 0) {
        echo "<p>Menampilkan pola untuk angka: $angka</p>";
    } else {
        echo "<p>Tidak ada angka yang ditentukan. Tambahkan ?angka=X ke URL untuk menampilkan pola.</p>";
    }
    ?>
    
    <p>Contoh:</p>
    <ul>
        <li><a href="?angka=5">Tampilkan pola untuk 5</a></li>
        <li><a href="?angka=10">Tampilkan pola untuk 10</a></li>
    </ul>
</body>
</html>