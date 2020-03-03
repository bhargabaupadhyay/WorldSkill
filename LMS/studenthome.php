<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: studentlogin.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Library Management System</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>LMS</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="viewbook.php"><i class="fa fa-book"></i>View Book</a>
				<a href="issuebook.php"><i class="fa fa-book"></i>Issue Book</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Student Home Page</h2>
			<p>Welcome , <?=$_SESSION['name']?></p>
		</div>
	</body>
</html>
