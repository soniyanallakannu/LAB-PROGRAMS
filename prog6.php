
<!DOCTYPE html>
<html>
<head>
<title>LOGIN FORM</title>
</head>
<body>
<h2>LOGIN FORM</h2>
<form action="login.php" method="POST">
<label for="username">USERNAME: </label>
<input type="text" id="username" name="username" required><br><br>
<label for="password">PASSWORD: </label>
<input type="password" id="password" name="password" required><br><br>
<input type="submit" value="login">
</form>
</body>
</html>
<?php
$username=$_POST['username'];
$password=$_POST['password']; if($username==='admin' &&
$password==='pass123')
{ header('Location: home.php'); exit;
}
else
{
echo 'Invalid username or password.';
}
?>

Home.php
<!DOCTYPE html>
<html>
<head>
<title>Profile page</title>
<link ref="stylesheet" href="style.css">
</head>
<body>
<div class ="profile_container">
<img
src="https://getmyuni.azureedge.net/college- image/big/psg-college-of-arts-and-science- psgcas-coimbatore.jpg" alt="Profile picture">
<h1>PSGCAS</h1>
<p>DA class!!!..</p>
<ul>
<li>Email: ragini@gmail.com</li>
<li>Phone:+91 6790357809</li>
<li>Location: CBE,INDIA</li>
</ul>
<a href="home.php"/>LOGOUT
</div>

 
</body>
</html>
 
  


