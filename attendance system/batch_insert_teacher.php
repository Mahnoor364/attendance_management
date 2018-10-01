<?php
$conn = mysqli_connect("localhost", "root", "", "attendance_management");
if (isset($_POST["import"])) {
    
            
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into teacher(Employee_Id,Teacher_Name,Father_Name,Gender,Cell_No,Email,PasswordHash,Address)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3]  . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "')";
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