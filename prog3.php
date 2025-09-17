<!DOCTYPE html>
<html>
<body>
<center><b><h1>String Handling and Reversing</h1></b></center>

<form action="" method="get">
    ENTER YOUR CHOICE: <input type="text" name="CHOICE"/><br><br>
    <input type="submit" value="Submit"/><br>
</form>

<?php
// Run only when form is submitted and not empty
if (isset($_GET["CHOICE"]) && $_GET["CHOICE"] !== '') {
    $n = $_GET["CHOICE"];

    function countt($n) {
        $upper = 0;
        $lower = 0;
        $number = 0;
        $special = 0;

        for ($i = 0; $i < strlen($n); $i++) {
            $ch = $n[$i];
            if (ctype_upper($ch)) {
                $upper++;
            } elseif (ctype_lower($ch)) {
                $lower++;
            } elseif (ctype_digit($ch)) {
                $number++;
            } else {
                $special++;
            }
        }

        echo "Upper case letters: " . $upper . "<br>";
        echo "Lowercase letters: " . $lower . "<br>";
        echo "Number: " . $number . "<br>";
        echo "Special characters: " . $special . "<br>";

        // Also show reversed string
        echo "Reversed string: " . strrev($n) . "<br>";
    }

    countt($n);
}
?>
</body>
</html>
