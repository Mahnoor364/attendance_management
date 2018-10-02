<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Start Session</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<a href="session_menu.php">Go back</a>    	
<?php
require_once '../db.php';

    if(isset($_GET['submit']) || isset($_GET['manipulate']))
    {
       $program_id = $_GET['program_id'];
       $department_id = $_GET['department_id'];
       $semester = $_GET['semester'];
       $year = $_GET['year'];
       $session_id = $_GET['session_id'];
    }

    
    
    
    if(isset($_POST['set_courses']))
    {
       $program_id = $_POST['program_id'];
       $department_id = $_POST['department_id'];
       $semester = $_POST['semester'];
       $year = $_POST['year'];
       $teacher_id = $_POST['teacher_id'];
       $course_ids = $_POST['courses'];
       $session_id = $_POST['session_id']; 
       $batch = $_POST['batch'];


       $get_student_sql = $conn->prepare("select s.Student_Id 
       from student s 
       where s.Program_Id = :program_id and batch = :batch");
       
       $get_student_sql->bindParam("program_id", $program_id);
       $get_student_sql->bindParam("batch", $batch);

       $get_student_sql->execute(); 

       $student_ids = $get_student_sql->fetchAll();

       foreach($course_ids as $course_id){
            foreach($student_ids as $student_id)
            {     
                $add_course_student_sql = $conn->prepare(
                    "Insert into course_student_session (Course_Id,Student_Id,Session_Id)
                    values (:course_id, :student_id, :session_id)"
                );

                $add_course_student_sql->bindParam("course_id", $course_id);
                $add_course_student_sql->bindParam("student_id", $student_id);
                $add_course_student_sql->bindParam("session_id", $session_id);   
                
                $add_course_student_sql->execute();
            }
        }
    }

    $sql = $conn->prepare("SELECT c.Course_Id, c.Course_Code, c.Course_Name 
            FROM course c
            INNER JOIN course_program cp
            ON c.Course_Id = cp.Course_Id
            WHERE cp.Program_Id = :program_id");
    
    $sql->bindParam("program_id", $program_id);
    $sql->execute();
    
    $result = $sql->fetchAll();

    $sql2 = $conn->prepare("SELECT Teacher_Id, Employee_Id, Teacher_Name
    FROM teacher");


    $sql2->execute();

    $result2 = $sql2->fetchAll();

    
?>

<form method="post" action="choose_course_student.php" >

    <div class="input-group">
        <label>Batch</label>
        <input type="text" name="batch">
    </div>
    <div class="input-group">
        <label>Course: </label>
        <select name="courses[]" multiple="multiple">
        <?php
        foreach($result as $row)
            {
                
                echo "<option value='" . $row['Course_Id']. "'>" . $row['Course_Code'] . " - " . $row['Course_Name'] . "</option>";
            }
        ?>
        </select>
    </div>
    

    <input type="hidden"  name="semester" value="<?php echo $semester; ?>">
    <input type="hidden"  name="year" value="<?php echo $year; ?>">
    <input type="hidden"  name="program_id" value="<?php echo $program_id; ?>">
    <input type="hidden"  name="department_id" value="<?php echo $department_id; ?>">
    <input type="hidden"  name="session_id" value="<?php echo $session_id; ?>">
    <div class="input-group">
        <button type="submit" class="btn" name="set_courses">set Courses</button>
    </div>

</form>


<div>
<?php
//     $sql3 = $conn->prepare("select  c.Course_Name, count(s.Student_Id)
//     from program p 
//     inner join course_program cp
//     on p.Program_Id = cp.Program_Id
//     inner join course c 
//     on cp.Course_Id = c.Course_Id
//     inner join course_student_session css
//     on c.Course_Id = css.Course_Id
//     inner join student s 
//     on css.Student_Id = s.Student_Id
//     where p.Program_Id = :program_id and s.Batch = :batch
//     group by c.Course_Name");

// // $sql3->bindParam("semester",$semester);
// // $sql3->bindParam("year", $year);
// // $sql3->bindParam("program_id", $program_id);
// // $sql3->bindParam("department_id", $department_id);
// $sql3->execute();

// $result4 = $sql3->fetchAll();


// foreach($result4 as $row)
// {
   
//     echo "<div>" .$row['Course_Name']." - ". $row['Teacher_Name'] .  "</div>";
// }

?>
</div>


</body>
</html>