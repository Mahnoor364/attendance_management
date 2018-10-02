<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2>
Current Session
</h2>
<?php
    require_once '../db.php';

    if(isset($_POST['new_session']))
    {
        $new_semester = $_POST['new_semester'];
        $new_year = $_POST['new_year'];

        $add_session_sql = $conn->prepare("Insert into session (Semester,Year) values (:semester,:year)");

        $add_session_sql->bindParam("semester", $new_semester);
        $add_session_sql->bindParam("year", $new_year);

        $add_session_sql->execute();
    }

    $sql1 = $conn->prepare("SELECT Session_Id, Semester, Year as Year 
    FROM session 
    order by Year Desc, Semester DESC 
    Limit 1 ");

    
    $sql1->execute();

    $result1 = $sql1->fetch();

    echo "<h3>" .$result1['Semester'] . " " . $result1['Year'] . "</h3>";

    
    
    
    $get_dept_sql = $conn->prepare("SELECT Department_Id, Department_Name
                            FROM department");
    $get_dept_sql->execute();
    $depts = $get_dept_sql->fetchAll();
    
    
    $get_prog_sql = $conn->prepare("SELECT Program_Id, Program_Name
    FROM program");
    $get_prog_sql->execute();
    $progs = $get_prog_sql->fetchAll();

?>

<div>
<h3>Assign courses to teachers</h3>
<form method=get action="choose_course_teacher.php">
    <div class="input-group">
        <label>Department Name</label>
        <select name="department_id">
        <?php
        foreach($depts as $row)
            {
               
                echo "<option value='" . $row['Department_Id']. "'>" . $row['Department_Name'] . "</option>";
            }
        ?>
        </select>
    </div>
    <div class="input-group">
        <label>Program Name</label>
        <select name="program_id">
        <?php
        foreach($progs as $row)
            {
                
                echo "<option value='" . $row['Program_Id']. "'>" . $row['Program_Name'] . "</option>";
            }
        ?>
        </select>
    </div>
    <input type="hidden"  name="session_id" value="<?php echo $result1['Session_Id']; ?>">
    <input type="hidden"  name="semester" value="<?php echo $result1['Semester']; ?>">
    <input type="hidden"  name="year" value="<?php echo $result1['Year']; ?>">
    <button type="submit" name="manipulate">Go to Teacher Courses Management</button>
    
</form>
</div>
<div>
<h3>Set courses for students</h3>
<form method=get action="choose_course_student.php">
    <div class="input-group">
        <label>Department Name</label>
        <select name="department_id">
        <?php
        foreach($depts as $row)
            {
               
                echo "<option value='" . $row['Department_Id']. "'>" . $row['Department_Name'] . "</option>";
            }
        ?>
        </select>
    </div>
    <div class="input-group">
        <label>Program Name</label>
        <select name="program_id">
        <?php
        foreach($progs as $row)
            {
                
                echo "<option value='" . $row['Program_Id']. "'>" . $row['Program_Name'] . "</option>";
            }
        ?>
        </select>
    </div>
    <input type="hidden"  name="session_id" value="<?php echo $result1['Session_Id']; ?>">
    <input type="hidden"  name="semester" value="<?php echo $result1['Semester']; ?>">
    <input type="hidden"  name="year" value="<?php echo $result1['Year']; ?>">
    <button type="submit" name="manipulate">Go to Student Courses Management</button>
    
</form>
</div>

<div>
<h3>Create new Session</h3>
<form method=post action="session_menu.php">
    <div class="input-group">
        <label>Semester</label>
        <input type="text" name="new_semester">    
    </div>
    <div class="input-group">
        <label>Year</label>
        <input type="text" name="new_year">    
    </div>
    <button type="submit" name="new_session">Create Session</button>
</form>
    
</div>
</body>
</html>