<?php  
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=5) 
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Teacher</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<form action="newteacher.php" method="POST">
		<input type="text" class="login" id="username" name="uname" placeholder="Username" required>
		<input type="password" class="login" id="password" name="pwd" placeholder="Password" required>
		<input type="password" class="login" id="password2" name="pwd2" placeholder="Confirm Password" required>
		<input type="submit" class="submit" id="submit" value="Add Teacher">
	</form>
</body>
</html>