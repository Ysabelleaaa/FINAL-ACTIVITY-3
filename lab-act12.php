<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$course = $_POST['course'] ?? '';
$message = $_POST['message'] ?? '';


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

// GENDER
if (empty($gender)) {
    echo "Please select gender.<br>";
} else {
    echo "Done with gender.<br>";
}

// COURSE
if (empty($course)) {
    echo "Please select course.<br>";
} else {
    echo "Done with course.<br>";
}

// MESSAGE
if (empty($message)) {
    echo "Message is required.<br>
    <br>";
} else {
    echo "Done with message.<br>
    <br>";
}

}
?>

Name:
<input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
<br><br>

Email:
<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
<br><br>

Gender:
<input type="radio" name="gender" value="female"
<?php if($gender == "female") echo "checked"; ?>>Female

<input type="radio" name="gender" value="male"
<?php if($gender == "male") echo "checked"; ?>>Male

<input type="radio" name="gender" value="other"
<?php if($gender == "other") echo "checked"; ?>>Other
<br><br>

Course:
<select name="course">
    <option value="">--COURSES--</option>
    <option value="BSIT" <?php if($course == "BSIT") echo "selected"; ?>>BSIT</option>
    <option value="BSOA" <?php if($course == "BSOA") echo "selected"; ?>>BSOA</option>
    <option value="CSS" <?php if($course == "CSS") echo "selected"; ?>>CSS</option>
</select>
<br><br>

Message:
<textarea name="message"><?php echo htmlspecialchars($message); ?></textarea>
<br><br>

<input type="submit">

</form>

</body>
</html>
