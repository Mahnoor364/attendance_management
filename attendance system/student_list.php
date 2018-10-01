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
		<h2>Student List</h2>
	</div>
	
  <div class="content1">
    <div class="content_resize"> 
	

    <?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "attendance_management";
        try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                }
        catch(PDOException $e)
                {
               
                }

        $sql = $conn->prepare("SELECT s.Enrollment_No as Enrollment_No,
         s.Student_Name as Student_Name, s.Roll_No as Roll_No, p.Program_Name as Program_Name
         FROM student s 
         INNER JOIN program p 
         ON s.Program_Id = p.Program_Id");
        $sql->execute();

        $students = $sql->fetchAll();
        echo "<table style='border:  solid 1px black;color:black'>
        <tr>
        <th>Enrollment No.</th>
        <th>Student Name</th>
        <th>Roll No</th>
        <th>Program </th>
        </tr>
        ";
        if(count($students) != 0)
        {
         
            foreach($students as $student)
            {
                echo "<tr><td>". $student['Enrollment_No']
                ."</td><td>" .$student['Student_Name']
                ."</td><td>" .$student['Roll_No']
                ."</td><td>" .$student['Program_Name']
                ."</tr>";
            }
          
        }
        else 
        {
            echo "No students.";
        }

        echo "</table>";
    ?>
    
    

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
