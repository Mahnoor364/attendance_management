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

    
    
    
    if(isset($_POST['add_course']))
    {
       $program_id = $_POST['program_id'];
       $department_id = $_POST['department_id'];
       $semester = $_POST['semester'];
       $year = $_POST['year'];
       $teacher_id = $_POST['teacher_id'];
       $course_ids = $_POST['courses'];
       $session_id = $_POST['session_id']; 

       foreach($course_ids as $course_id){
            
            $add_course_teacher_sql = $conn->prepare(
                "Insert into course_teacher_session (Course_Id,Teacher_Id,Session_Id)
                values (:course_id, :teacher_id, :session_id)"
            );

            $add_course_teacher_sql->bindParam("course_id", $course_id);
            $add_course_teacher_sql->bindParam("teacher_id", $teacher_id);
            $add_course_teacher_sql->bindParam("session_id", $session_id);   
            
            $add_course_teacher_sql->execute();
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

<form method="post" action="choose_course_teacher.php" >

    <div class="input-group">
        <label>Teacher Name</label>
        <select name="teacher_id">
        <?php
        foreach($result2 as $row)
            {
               
                echo "<option value='" . $row['Teacher_Id']. "'>" . $row['Employee_Id']. " : ". $row['Teacher_Name'] . "</option>";
            }
        ?>
        </select>
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
        <button type="submit" class="btn" name="add_course">Add Courses</button>
    </div>

</form>


<div>
<?php
    $sql3 = $conn->prepare("select c.Course_Name as Course_Name, t.Teacher_Name as Teacher_Name, s.Semester as Semester, s.Year, p.Program_Id, p.Program_Name, d.Department_Name
    from course c
    inner join course_teacher_session cts
    on c.Course_Id = cts.Course_Id
    inner join teacher t
    on cts.Teacher_Id = t.Teacher_Id
    inner join session s
    on cts.Session_Id = s.Session_Id
    inner join course_program cp
    on cp.Course_Id = c.Course_Id
    inner join program p
    on cp.Program_Id = p.Program_Id
    inner join department d
    on d.Department_Id = p.Department_Id
    where s.Semester = :semester 
    and s.Year = :year 
    and p.Program_Id = :program_id 
    and d.Department_Id = :department_id
    ORDER BY `t`.`Teacher_Name`  ASC");

$sql3->bindParam("semester",$semester);
$sql3->bindParam("year", $year);
$sql3->bindParam("program_id", $program_id);
$sql3->bindParam("department_id", $department_id);
$sql3->execute();

$result4 = $sql3->fetchAll();


foreach($result4 as $row)
{
   
    echo "<div>" .$row['Course_Name']." - ". $row['Teacher_Name'] .  "</div>";
}

?>
</div>


</body>
</html>