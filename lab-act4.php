<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
 Name: <input type="text" name="name">
 <input type="submit">
</form>

<?php
if(empty($_POST["name"])) {
 echo "Name is required.";
} else {
 echo "Hello, " . $_POST['name'];
}

?>

</body>
</html>
