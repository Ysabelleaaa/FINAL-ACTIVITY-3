<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
Hobbies:<br>

<?php $hbs = $_POST['hobbies'] ?? []; ?>

<input type="checkbox" name="hobbies[]" value="Reading"
<?php if(in_array("Reading", $hbs)) echo "checked"; ?>>
Reading<br>

<input type="checkbox" name="hobbies[]" value="Gaming"
<?php if(in_array("Gaming", $hbs)) echo "checked"; ?>>
Gaming<br>

<input type="checkbox" name="hobbies[]" value="Watching Movies/Series"
<?php if(in_array("Watching Movies/Series", $hbs)) echo "checked"; ?>>
Watching Movies/Series<br><br>

<input type="submit"><br><br>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$hbs = $_POST['hobbies'] ?? [];

if(empty($hbs)) {
 echo "Select at least one hobby.<br>";
} else {
 echo "My hobbies: " . htmlspecialchars(implode(", ", $hbs));
}

}
?>

</body>
</html>
