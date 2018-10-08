<?php?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ATTENDANCE MANAGER</title>	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="styling.css" rel="stylesheet" type="text/css" />

</head>
<body >

  <div class="head">
		<h2>Login</h2>
	</div>
	
	  <div class="content1">
    <div class="content_resize">
		
	<?php 
	session_start();
	include("loginconnection.php");
?>
		<form method="post" action="">	    <div class="input-group">

Username
			<input type="text" name="username" /> <br/><br/>
			</div>
			    <div class="input-group">

Password
			<input type="text" name="password" /><br/><br/> </div>
			
			<input type="submit" name="submit" value="LOGIN" />
		</form >
		<?php
		if(isset($_POST['submit']))
		{
			$user=$_POST['username'];
			$pwd=$_POST['password'];
			$query="SELECT * FROM teacher WHERE Employee_Id='$user' && PasswordHash='$pwd'";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			
			if ($total==1)
			{   $_SESSION['user_name']=$user;
				header('location:home.php');
			}
			else
			{
				echo"Login Failed";
			}
		}
		?><div class="clr"></div>
    </div>
  </div>
  <div class="fbg" >
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
      <?php include 'footer.php';?>
</body>
</html>