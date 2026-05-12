<!DOCTYPE html>
<html>
<body>
  
<form method="post" action="">
    Choose a course:
    <select name="course">
        <option value="">--COURSES--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSOA">BSOA</option>
        <option value="CSS">CSS</option>
        <option value="HRM">HRM</option>
    </select>
    <input type="submit">
</form>

<?php
if(empty($_POST["course"])) {
 echo "Please select your course.";
} else {
 echo "Your course is " . $_POST['course'];
}
?>

</body>
</html>
