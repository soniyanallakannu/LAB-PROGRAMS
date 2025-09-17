<?php
date_default_timezone_set("Asia/Kolkata");
$lastVisitedTime = time();
setcookie('last_visited', $lastVisitedTime, time() + 3600); 
if (isset($_COOKIE['last_visited'])) {
    $lastVisited = date('Y-m-d H:i:s', $_COOKIE['last_visited']);
} else {
    $lastVisited = "Unknown";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PSG College of Arts & Science</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ef6;
        }
        .navbar {
            background-color: #555;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
        }
        .navbar strong {
            flex-grow: 1;
        }
        .navbar a {
            color: yellow;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a:hover {
            color: white;
        }
        .content {
            text-align: center;
            padding: 30px;
            background-image: url("https://getmyuni.azureedge.net/college-image/big/psg-college-of-arts-and-science-psgcas-coimbatore.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            color: black;
            min-height: 600px;
        }
        .lastvisit {
            color: red;
            font-style: italic;
            font-weight: bold;
        }
        .footer {
            background-color: yellow;
            text-align: left;
            padding: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="navbar">
    <strong>PSG COLLEGE OF ARTS & SCIENCE</strong>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="programmes.php">Programs</a>
    <a href="exams.php">Exams</a>
    <a href="placement.php">Placement</a>
</div>
<div class="content">
    <h2>WELCOME TO PSG COLLEGE OF ARTS & SCIENCE</h2>
    <p><b>Explore our wide range of academic programs, state-of-the-art facilities and diverse student community.</b></p>
    <p class="lastvisit">Your last visit on this page was on: <?php echo $lastVisited; ?></p>

    <!-- Background Music -->
    <audio autoplay loop>
        <source src="background_music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <img src="animated_logo.gif" alt="College Logo" width="150">
</div>

<!-- Footer -->
<div class="footer">
    Contact: 0421-2485678
</div>

</body>
</html>
