<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
 Password: <input type="password" name="psw">
 <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$psw = $_POST['psw'] ?? '';

if(empty($psw)) {
 echo "Password is required.";
} else {
 echo "Done with Password.";
}

}
?>

</body>
</html>
