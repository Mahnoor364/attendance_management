<?php
$con=mysqli_connect('localhost' ,'root' ,'') ;

if(!$con){
echo"Not connected";
}

if (!mysqli_select_db($con,'attendance_management'))
{
echo"database not selcted";
}
$Student_Name=$_POST['Student_Name'];
$Father_Name=$_POST['Father_Name'];
$Enrollment_No=$_POST['Enrollment_No'];
$Batch=$_POST['Batch'];
$Section=$_POST['Section'];
$Roll_No=$_POST['Roll_No'];
$Gender=$_POST['Gender'];
$Student_Cell=$_POST['Student_Cell'];
$Parent_Cell=$_POST['Parent_Cell'];
$Parent_Email=$_POST['Parent_Email'];
$Address=$_POST['Address'];

$sql ="INSERT INTO student(Student_Name,Father_Name,Enrollment_No,Batch,Section,Roll_No,Gender,Student_Cell,Parent_Cell,Parent_Email,Address) VALUES ('$Student_Name','$Father_Name','$Enrollment_No','$Batch','$Section','$Roll_No','$Gender','$Student_Cell','$Parent_Cell','$Parent_Email','$Address')";
if(!mysqli_query($con,$sql)){
echo"not inserted";
}
else {
echo"Your Form has been submitted successfully :)";
}
?>
