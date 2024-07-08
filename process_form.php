<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process radio button input
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        echo "Selected color: " . htmlspecialchars($color) . "<br>";
    } else {
        echo "No color selected.<br>";
    }
    
    // Process checkbox inputs
    if (isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies'];
        echo "Selected hobbies: " . implode(", ", array_map('htmlspecialchars', $hobbies)) . "<br>";
    } else {
        echo "No hobbies selected.<br>";
    }
    
    // Process select menu input
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
        echo "Selected country: " . htmlspecialchars($country) . "<br>";
    } else {
        echo "No country selected.<br>";
    }
}
?>
