<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
 Name: <input type="text" name="name">
 <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
if(empty($_POST["name"])) {
 echo "Name is required";
} else {
 $name = htmlspecialchars($_POST['name']);
 echo "Hello, " . $name;
}

}
?>

</body>
</html>
