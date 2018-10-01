<?php
$con=mysqli_connect("localhost","root","","attendance_management");

if($con)
	
	{
		$file=$_FILES['csvfile']['tmp_name'];
		$handle=fopen($file,"r");
		$i=0;
		while(($cont-fgetcv($handle,1000,","))!==false)
		{
		$table=rtrim($_FILES['csvfiles']['name'],".csv");
			if($i==0)
			{
				$Enrollment_No=$cont[1];
				$Roll_No=$cont[2];
				$Student_Name=$cont[3];
				$query="INSERT INTO student ($Enrollment_No,$Roll_No,$Student_Name)VALUES ('$cont[1]','$cont[2]','$cont[3]')";
				echo $query,"<br>";
				mysqli_query($con,$query);
			}
			$i++;
			}
		}	
	


?>
