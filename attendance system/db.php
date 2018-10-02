<?php

$con=mysqli_connect('localhost' ,'root' ,'') ;

if(!$con){
echo"Not connected";
}

if (!mysqli_select_db($con,'attend'))
{
echo"database not selcted";
}



			
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attend";
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