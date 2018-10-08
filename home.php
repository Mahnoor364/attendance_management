<?php?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ATTENDANCE MANAGER</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="styling.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>
<div class="main">
  <?php include 'header.php';?>
  <div class="content1">
    <div class="content_resize">
	      <form>
<p align="center">
	    <?php
	  session_start();
	  include("loginconnection.php");
	  echo "WELCOME ";
	  $userprofile=$_SESSION['user_name'];
	  $query="SELECT * FROM teacher WHERE Employee_Id='$userprofile'";
	  $data=mysqli_query($conn,$query);
      $result=mysqli_fetch_assoc($data);
	  echo $result['Teacher_Name'];
	  ?>
		</p>
	</form>
    
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
	  <div class="clr"></div>
    </div>
  </div>
     <?php include 'footer.php';?>

</div>
</html>
