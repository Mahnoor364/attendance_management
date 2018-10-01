<?php?>

<html>
<head>
	<title>ATTENDANCE MANAGER</title>
<link href="sheet.css" rel="stylesheet" type="text/css" />

</head>
<body style ="background-image: url('images/download.jpg');">

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user"><a href="attendance.php">Login</a></button>
		</div>
		</form>


</body>
</html>