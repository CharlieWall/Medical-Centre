<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel = "stylesheet" type = "text/css" href = "newStyle.css">
</head>
<body>
<div id = "container">
<div id = "header">
<div id = "topHeader">
<div class = "container-fluid container-main">
	<div id = "logo">
	<a id = "headerLogo" href = "">AUT University</a>
	<img src = "logo.png" alt = "AUT Logo"/>
	</div>
</div>
</div>
<div id = "mainHeader">
</div>
<div id = "body">
</header>
<div class = "main-wrapper">
<nav>
<ul>
<li>
<a href = "index.php">Home</a>
</li>
</ul>
<div class = "nav-login">

<?php
if (isset($_SESSION['loginUsername'])){
	echo '<form action = "logout.php" method = "POST">
		  <button type = "submit" name = "submit">Logout</button>
		  </form>';
}
else {
	echo '<form action = "login.php" method = "POST">
		  <input type = "text" name = "username" placeholder = "Username">
		  <input type = "password" name = "password" placeholder = "Password">
		  <button type = "submit" name = "submit">Login</button>
		  </form>';
}
?>
</div>
</div>
</div>
</div>
</body>