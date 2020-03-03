<!DOCTYPE html>
<html>
<head>
	<title>Online Library Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="register.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
	<header>
		<div class="logo">
			<h1>LMS</h1>
			
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="studentlogin.php">Student-Login</a></li>
				<li><a href="studentregister.php">Student-Register</a></li>
				<li><a href="adminlogin.php">Admin-Login</a></li>
			</ul>
		</nav>
		
	</header>

<div class="register">
			<h1>Student Login</h1>
			<form action="slogin.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				
			<input type="submit" value="Login">
			</form>
		</div>
</body>
</html>