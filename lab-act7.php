<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
 <input type="submit">
</form>

<?php
if(empty($_GET["gender"])) {
 echo "Please select your gender";
} else {
 echo "Your are a " . $_GET['gender'];
}
?>

</body>
</html>
