<?php
$con=mysqli_connect('localhost' ,'root' ,'') ;

if(!$con){
echo"Not connected";
}

if (!mysqli_select_db($con,'attendance_management'))
{
echo"database not selcted";
}

$Course_Code=$_POST['Course_Code'];
$Course_name=$_POST['Course_name'];
$Credit_Hours=$_POST['Credit_Hours'];
$Practical_Hours=$_POST['Practical_Hours'];
$sql ="INSERT INTO course(Course_Code,Course_name,Credit_Hours,Practical_Hours) VALUES ('$Course_Code','$Course_name','$Credit_Hours','$Practical_Hours')";
if(!mysqli_query($con,$sql)){
echo"not inserted";
}
else {
echo"Your Form has been submitted successfully :)";
}
?>
