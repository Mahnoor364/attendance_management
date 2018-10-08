<?php
$conn=mysqli_connect("localhost","root","","attendance_management");
if($conn)
{
	echo"";
}
else
{
	die("Connection failed because ".mysqli_connect_error());
}	
?>