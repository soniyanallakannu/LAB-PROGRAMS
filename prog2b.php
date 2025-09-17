<html>
<body>
<h1><center>STRING,MATH AND DATE
METHODS</center></h1>
<form action ="ex2b.php" method ="get"> 1.STRING FUNCTIONS<BR>
2.	DATE FUNCTIONS<BR>
3.	MATH FUNCTIONS<BR>
ENTER YOUR CHOICE<input type="text"
name="CHOICE"/><BR>
<input type="submit" name="visit"/><br>
<?php
$n=$_GET["CHOICE"];
switch($n)
{
case 1:
echo "<b>STRING FUNCTIONS</b>";
echo "<br>";
$string=" basic functiOn "; echo strtoupper($string);
echo "<br>";
echo ucfirst($string); echo "<br>";
echo strrev($string); echo "<br>";
echo rtrim($string); echo "<br>";
echo ltrim($string); echo "<br>";
echo strtolower($string); echo "<br>";
echo str_repeat($string,3); echo "<br>";
echo
str_replace("Basic","Elementary","Basic functions");
echo "<br>"; break;
case 2:
echo "DATE FUNCTION";
echo "<br>";
date_default_timezone_set("Asiz/kolkata");
echo date("d"); echo "<br>";
echo date("m"); echo "<br>";
echo date("y"); echo "<br>"; break;
case 3:
echo "Mark alloted";
$m1=95.5;
$m2=96.3;
$m3=90.65;
$m4=91.56;
$m5=85.6;
$p=-95.4;
echo floor($m1); echo "<br>";
echo floor($m2);
echo "<br>";
echo floor($m3); echo "<br>";
echo floor($m4); echo "<br>";
echo floor($m5);
echo "<br>"; echo abs($p); echo "<br>"; break;
default:
echo "Enter the correct choice";


?>
</form>
</body>
</head>
</html>
 
case 3:
echo "Mark alloted";
$m1=95.5;
$m2=96.3;
$m3=90.65;
$m4=91.56;
$m5=85.6;
$p=-95.4;
echo floor($m1); echo "<br>";
echo floor($m2);
echo "<br>";
echo floor($m3); echo "<br>";
echo floor($m4); echo "<br>";
echo floor($m5);
echo "<br>"; echo abs($p); echo "<br>"; break;
default:
echo "Enter the correct choice";


?>
</form>
</body>
</head>
</html>
 
case 3:
echo "Mark alloted";
$m1=95.5;
$m2=96.3;
$m3=90.65;
$m4=91.56;
$m5=85.6;
$p=-95.4;
echo floor($m1); echo "<br>";
echo floor($m2);
echo "<br>";
echo floor($m3); echo "<br>";
echo floor($m4); echo "<br>";
echo floor($m5);
echo "<br>"; echo abs($p); echo "<br>"; break;
default:
echo "Enter the correct choices";
break;
}
</form>
</body>
</head>
</html>
 






