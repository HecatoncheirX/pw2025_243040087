<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <?php
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 5; $col++) {
                $color = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<div class='square $color'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
