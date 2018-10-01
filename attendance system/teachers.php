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
.content1 {
	width: 50%;
	margin: 10px auto;
	padding: 20px;
		border: 1px solid #9f5555;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
form
{
	width: 50%;
	margin: 10px auto;
	padding: 20px;
	background: white;
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
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
           <li ><a href="attendance.php">Attendance</a></li>
          <li><a href="students.php">Student</a></li>
          <li class="active"><a href="#">Teacher</a></li>
          <li><a href="courses.php">Course</a></li>
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
		<h2>Teacher Data</h2>
	</div>
	
  <div class="content1">
    <div class="content_resize">
		
<form method="post" action="batch_insert_teacher.php" enctype="multipart/form-data"> 
		<div >
        <label>Choose CSV File</label> 
				<input type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
        <br />

    </div>
		</form>	
       <form method="post" action="teacher_insert.php">
	    <div class="input-group">
			<label>Employee Id</label>
			<input type="text" name="Employee_Id" placeholder="eg. NED-0000-12121" >
		</div>
        <div class="input-group">
			<label>Name</label>
			<input type="text" name="Teacher_Name" >
		</div>
		<div class="input-group">
			<label>Father Name</label>
			<input type="text" name="Father_Name" >
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="text" name="Gender" >
		</div>
		<div class="input-group">
			<label>Cell no.</label>
			<input type="text" name="Cell_No" placeholder="eg. 03002915572">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="Email" placeholder="eg. xyz@ned.com">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="PasswordHash"  >
		</div>
		
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address" placeholder=" eg. House No 111-A,Gulshane-e-Iqbal">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">SAVE</button>
		</div>
		<p>
			<a href="teacher_list.php">View Teachers Info</a>
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
