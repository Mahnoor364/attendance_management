<?php?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ATTENDANCE MANAGER</title>
<style>
.head {
	width: 30%;
	color: white;
	background: #9f5555;
	text-align: center;
	border: 1px solid #9f5555;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
	margin-left:450px;
    margin-top:10px;
}
form, .content1 {
	width: 30%;
	margin: 10px auto;
	padding: 20px;
		border: 1px solid #9f5555;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid #9f5555;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #9f5555;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
           <li ><a href="attendance.php">Attendance</a></li>
          <li><a href="students.php">Student</a></li>
          <li><a href="teachers.php">Teacher</a></li>
          <li class="active"><a href="#">Course</a></li>
          <li style="float:right;" ><a href="login.php">LogOut</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1><a href="index.html">Attendance <span>Manager</span> </a> <small></small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="head">
		<h2>Course Data</h2>
	</div>
	
  <div class="content1">
    <div class="content_resize"> 
		<!-- CSV INSERT CODE -->
		<form method="post" action="batch_insert_course.php" enctype="multipart/form-data"> 
		<div >
        <label>Choose CSV File</label> 
				<input type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
        <br />

    </div>
		</form>	
    <form method="post" action="course_insert.php">
        <div class="input-group">
			<label>Course Code</label>
			<input type="text"  name="Course_Code">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Course_name">
		</div>
		<div class="input-group">
			<label>Credit Hours</label>
			<input type="text" name="Credit_Hours">
		</div>
		<div class="input-group">
			<label>Practical Credit Hours</label>
			<input type="text" name="Practical_Hours">
		</div>
		
		
		
		
		<?php
			
			$servername = "www.icoderslab.com";
			$username = "AttendanceDB";
			$password = "AttendanceDB";
			$dbname = "AttendanceManager";
			try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo "Connected successfully"; 
					}
			catch(PDOException $e)
					{
					echo "Connection failed: " . $e->getMessage();
					}
			?>

		<div class="input-group">
			<label>Program course belongs to</label>
				<select name="program" >
				<?php
					try{
						$sql = 	$conn->prepare("Select Program_Id, Program_Name from program");
						$sql->execute();
						$programs = $sql->fetchAll();
				
						foreach($programs as $program)
						{
							echo "<option value='" . $program['Program_Id']. "'>" . $program['Program_Name']. "</option>";
						}
					}
					catch(PDOException $e)
					{
						echo "Error: " . $e->getMessage();
					}
					
				?>
				</select>
		</div>





		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">SAVE</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
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
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Layout by Atomic <a href="http://www.atomicwebsitetemplates.com/">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
