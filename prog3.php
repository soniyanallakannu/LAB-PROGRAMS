<!DOCTYPE html>
<html>
<body>
<center><b><h1> String handling and reversing</h1></b></center>
<form action="pro4.php" method="get"> ENTER YOUR CHOICE<input type="text" name="CHOICE"/><br><br>
<input type="submit" value="Submit"/><br>
</form>
<?php
isset($_GET["CHOICE"]);
$n=$_GET["CHOICE"];
function countt($n)
{
//$g=$n;
$upper=0;
$lower=0;
$number=0;
$special=0;
//$a=[];
for($i=0;$i<strlen($n);$i++)
{
if(ctype_upper($n[$i]))
$upper++;
elseif(ctype_lower($n[$i]))
$lower++;
elseif(ctype_digit($n[$i]))
$number++; else
$special++;
}
echo "Upper case letters: ".$upper; echo "<br>";
echo "Lowercase letters: ".$lower; echo "<br>";
echo "Number: ".$number; echo "<br>";
echo "special charcter: ".$special; echo "<br>";

}
countt($n);

?>
</body>
</html> 



