<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 Name: <input type="text" name="name"><br>
 Email: <input type="text" name="email"><br>
 Gender:<input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br>
Choose a course:
 <select name="course">
    <option value="">--COURSES--</option>
    <option value="BSIT">BSIT</option>
    <option value="BSOA">BSOA</option>
    <option value="CSS">CSS</option>
    <option value="HRM">HRM</option>
 </select><br>
Message: <textarea name="message" rows="5" cols="50"></textarea><br>
<br>

 <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$course = $_POST['course'] ?? '';
$message = $_POST['message'] ?? '';

// NAME
if(empty($name)) {
    echo "Name is required<br>";
} else {
    $name = htmlspecialchars($name);
    echo "Hello, $name<br>";
}

// EMAIL
if (empty($email)) {
    echo "Email is required<br>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email<br>";
} else {
    $email = htmlspecialchars($email);
    echo "Your email is $email<br>";
}

// GENDER
if(empty($gender)) {
    echo "Please select your gender<br>";
} else {
    $gender = htmlspecialchars($gender);
    echo "You are a $gender<br>";
}

// COURSE
if(empty($course)) {
    echo "Please select your course<br>";
} else {
    $course = htmlspecialchars($course);
    echo "Your course is $course<br>";
}

// MESSAGE
if(empty($message)) {
    echo "Please add a message<br>";
} else {
    $message = htmlspecialchars($message);
    echo "Your message: $message<br>";
}

}
?>

</body>
</html>
