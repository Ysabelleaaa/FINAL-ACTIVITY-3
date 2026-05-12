<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
 Name: <input type="text" name="name">
 Email: <input type="text" name="email">
 <input type="submit">
</form>

<?php
if(isset($_GET['name'])) {
 echo "Hello, " . $_GET['name'] . "<br>"; 
 echo "Your email is " . $_GET['email'];
}
?>

</body>
</html>
