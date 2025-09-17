<!DOCTYPE html>
<html>
<head>
    <title>String, Math and Date Functions in PHP</title>
</head>
<body>
<h1><center>STRING, MATH AND DATE FUNCTIONS</center></h1>

<form method="get">
    <b>Select an option:</b><br>
    1. String Functions <br>
    2. Date Functions <br>
    3. Math Functions <br><br>
    Enter your choice: <input type="text" name="choice" required>
    <input type="submit" value="Submit">
</form>
<hr>

<?php
if (isset($_GET['choice'])) {
    $n = $_GET['choice'];

    switch ($n) {
        case 1:
            echo "<h2>STRING FUNCTIONS</h2>";
            $string = " basic functiOn ";
            echo "Original String: '$string'<br>";
            echo "Uppercase: " . strtoupper($string) . "<br>";
            echo "Lowercase: " . strtolower($string) . "<br>";
            echo "Ucfirst: " . ucfirst($string) . "<br>";
            echo "Reversed: " . strrev($string) . "<br>";
            echo "Trimmed (Right): '" . rtrim($string) . "'<br>";
            echo "Trimmed (Left): '" . ltrim($string) . "'<br>";
            echo "Repeated 3 times: " . str_repeat($string, 3) . "<br>";
            echo "Replace 'Basic' with 'Elementary': " . str_replace("Basic", "Elementary", "Basic functions") . "<br>";
            break;

        case 2:
            echo "<h2>DATE FUNCTIONS</h2>";
            date_default_timezone_set("Asia/Kolkata");
            echo "Day (d): " . date("d") . "<br>";
            echo "Month (m): " . date("m") . "<br>";
            echo "Year (Y): " . date("Y") . "<br>";
            echo "Current Time (H:i:s): " . date("H:i:s") . "<br>";
            echo "Full Date & Time: " . date("d-m-Y H:i:s") . "<br>";
            break;

        case 3:
            echo "<h2>MATH FUNCTIONS</h2>";
            $a = 95.5; $b = 96.3; $c = -91.56;

            echo "Number a = $a<br>";
            echo "Number b = $b<br>";
            echo "Number c = $c<br><br>";

            echo "Floor(a): " . floor($a) . "<br>";
            echo "Ceil(b): " . ceil($b) . "<br>";
            echo "Round(a): " . round($a) . "<br>";
            echo "Absolute(c): " . abs($c) . "<br>";
            echo "Square Root of 25: " . sqrt(25) . "<br>";
            echo "Power (2^5): " . pow(2, 5) . "<br>";
            echo "Random Number (1-100): " . rand(1, 100) . "<br>";
            break;

        default:
            echo "<h3 style='color:red;'>Please enter a valid choice (1, 2, or 3)</h3>";
    }
}
?>
</body>
</html>
