<?php
$conn = mysqli_connect("localhost", "root", "", "attendance_management");
if (isset($_POST["import"])) {
    
            
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into course (Course_Code,Course_Name,Credit_Hours,Practical_Hours)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3]  . "')";
            $result = mysqli_query($conn, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}

?>