<?php
$con=mysqli_connect('localhost' ,'root' ,'') ;

if(!$con){
echo"Not connected";
}

if (!mysqli_select_db($con,'attendance_management'))
{
echo"database not selcted";
}
$Employee_Id=$_POST['Employee_Id'];
$Teacher_Name=$_POST['Teacher_Name'];
$Father_Name=$_POST['Father_Name'];
$Gender=$_POST['Gender'];
$Cell_No=$_POST['Cell_No'];
$Email=$_POST['Email'];
$PasswordHash=$_POST['PasswordHash'];
$Address=$_POST['Address'];

$hashed=hash('sha512',$PasswordHash);
$sql ="INSERT INTO teacher(Employee_Id,Teacher_Name,Father_Name,Gender,Cell_No,Email,PasswordHash,Address) VALUES ('$Employee_Id','$Teacher_Name','$Father_Name','$Gender','$Cell_No','$Email','$hashed','$Address')";
if(!mysqli_query($con,$sql)){
echo"not inserted";
}
else {
echo"Your Form has been submitted successfully :)";
}
?>
