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
			<h1>Student Register</h1>
			<form action="sregister.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>

				<label for="Registration Number">
					<i class="fa fa-id-card"></i>
				</label>
				<input type="text" name="regno" placeholder="Registration Number" id="email" required>

				<input type="submit" value="Register">
			</form>
		</div>
</body>
</html>