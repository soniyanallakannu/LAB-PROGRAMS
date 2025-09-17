<html>
<body>
<marquee><b><h1>LOOPING & CONDITIONAL
STATEMENT</h1></b></marquee>
<form action="program1.php" method="get"> 1.Armstrong number<br>
2.Sum of digits<br> 3.display triangle<br>
enter your choice<input type="text" name="choice"/><br>
<input type="submit" name="visit"/><br>
<?php
$n=$_GET["choice"]; switch($n) {
case 1:
echo strtoupper(" <b><i>Armstrong number</b></i><br>");
$num=153;
$total=0;
$x=$num;
while($num!=0) {
$rem=$num%10;
$total=$total+$rem*$rem*$rem;
$num=$num/10;
}
if($x=$total)
{	echo "It is an armstrong number"; } 
else
{	echo "It is not an armstrong number"; }
break; 
case 2:
echo strtoupper(" <b><i>Sum of digits</b></i><br>");
$num=16;
$sum=0;
$rem=0;
for($i=0;$i<=$num;$i++) {
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
echo "Sum of digits=$sum"; break;
case 3:
echo
strtoupper(" <b><i>Triangle</b></i><br>"); for($i=0;$i<=5;$i++) {
for($j=5-$i;$j>=1;$j--)
{	echo "*";	} echo"<br>";
}
break; }
?>
</body>
</html>




















