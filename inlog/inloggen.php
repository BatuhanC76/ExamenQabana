<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="inlog.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="login">
		<img src="../vendor/images/Webp.net-resizeimage.png" alt="">
		<form action="authenticate.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Gebruiksnaam" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>