<html>
<body>

<?php
$computerHardware = array("Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD");

echo "<h2>Macam-macam perangkat keras komputer:</h2>";
echo "<ol>";
foreach ($computerHardware as $hardware) {
    echo "<li>" . $hardware . "</li>";
}
echo "</ol>";

array_push($computerHardware, "Card Reader", "Modem");

sort($computerHardware);

echo "<h2>Macam-macam perangkat keras komputer baru:</h2>";
echo "<ol>";
foreach ($computerHardware as $hardware) {
    if ($hardware == "Card Reader" || $hardware == "Modem") {
        echo "<li style='text-decoration: underline; color: red;'>" . $hardware . "</li>";
    } else {
        echo "<li>" . $hardware . "</li>";
    }
}
echo "</ol>";
?>

</body>
</html>