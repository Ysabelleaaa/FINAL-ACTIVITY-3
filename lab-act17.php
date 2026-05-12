<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// NAME
if (empty($name)) {
    echo "Name is required.<br>";
} else {
    echo "Done with name.<br>";
}

// EMAIL
if (empty($email)) {
    echo "Email is required.<br>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email.<br>";
} else {
    echo "Done with email.<br>";
}

}

?>

Name:
<input type="text" name="name" required
value="<?php echo htmlspecialchars($name); ?>">
<br><br>

Email:
<input type="text" name="email" required
value="<?php echo htmlspecialchars($email); ?>">
<br><br>

<input type="submit">

</form>

</body>
</html>
