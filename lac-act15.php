<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

<?php

$name = $_POST['name'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($name)) {
    echo "Name is required.<br>";
} else {
    echo "Done with name.<br>";
}

}

?>

Name:
<input type="text" name="name"
value="<?php echo htmlspecialchars($name ?? ''); ?>">
<br><br>

<input type="submit">
<br><br>

<button type="button" onclick="window.location.href='lab15.php'">
Reset
</button>

</form>

</body>
</html>
