<?php

$angka = 0;

if(isset($_POST['angka'])) {

    $angka = $_POST['angka'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 6b - Kotak Angka dengan Form</title>
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
        
        .form-container {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Kotak Angka Dinamis dengan Form</h2>
    
    <div class="form-container">
        <form method="POST" action="">
            <label for="angka">Masukkan Angka: </label>
            <input type="number" id="angka" name="angka" min="1" value="<?php echo $angka; ?>">
            <input type="submit" value="Tampilkan">
        </form>
    </div>
    
    <?php
   
    if($angka > 0) {
        
        for($i = $angka; $i >= 1; $i--) {
            echo "<div class='baris'>";
            
           
            for($j = 1; $j <= $i; $j++) {
                
                $class = ($i % 2 == 0) ? 'kotak-biru' : 'kotak-putih';
                echo "<div class='kotak-angka $class'>$i</div>";
            }
            
            echo "</div>";
        }
    }
    ?>
</body>
</html>