<?php
$hardware = [
    "Motherboard",
    "Processor",
    "Hard Disk",
    "PC Cooler",
    "VGA Card",
    "SSD"
];

echo "<h3>Macam - macam perangkat keras komputer</h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}

echo "</ul>";
$hardware[] = "Card Reader";
$hardware[] = "Modem";

sort($hardware);

echo "<h3>Macam - macam perangkat keras komputer baru</h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>