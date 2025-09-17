<html>
<body>
<marquee><b><h1>File Handling methods</h1></b></marquee>
<form action ="ex2a.php" method ="get"> 
1.FILE CREATE<BR>
2.	FILE READ<BR>
3.	FILE APPEND<BR>
4.	FILE COPY<BR>
5.	FILE DELETE<BR>
ENTER YOUR CHOICE<input type="text" name="CHOICE"/><BR>
<input type="submit" name="visit"/><br>
<?php
$n=$_GET["CHOICE"];
switch($n)
{
case 1:
echo "FILE CREATION";
$var=fopen("sample1.txt","w");
$a="hello php"; fwrite($var,$a); echo "<br>"; break;
case 2:
echo "FILE READ";
$var=fopen("sample1.txt",'r'); echo fgets($var);
fseek($var,0);
$count=1;
while(!feof($var))
{
echo '[',$count,']',fgets($var),'<br>';
$count++;
}
echo '<br>Total lines in the file: ',$count-1;
fclose($var);
echo"<br>"; break;
case 3:
echo "FILE APPENDED";
$var=fopen("sample1.txt",'a+');
$txt="HELLO PROGRAMMER";
fwrite($var,$txt); fseek($var,0);
echo '<br>';
$f1=fread($var,filesize('sample1.txt')); var_dump($f1);
fclose($var); echo "<br>"; break;

case 4:
echo "FILE COPY";
copy('ex2a.php','file.php'); echo "<pre>";
echo "File copied successfully!"; echo "</pre>";
break; case 5;
echo "FILE DELETE";
if(!unlink("sample1.txt"))
{
echo "File couldnot be deleted";
}
else
{
echo "File deleted";
}
break;
}
?>
</form>
</body>
</html>
 

