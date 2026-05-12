<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
 Age: <input type="number" name="age">
 <input type="submit">
</form>

<?php
if(isset($_GET["age"])) {

$age = $_GET["age"];

if(empty($age)) {
 echo "Age is required";
} 
elseif (!is_numeric($age)) {
 echo "Numbers only";
}
elseif($age < 1 || $age > 120) {
 echo "Invalid age";
} else {
 $age = htmlspecialchars($_GET['age']);
 echo "You're " . $age;
}

}

?>

</body>
</html>
