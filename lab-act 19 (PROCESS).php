<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

// NAME
if(empty($name)) {
    echo "Name is required<br>";
} else {
    $name = htmlspecialchars($name);
    echo "Hello, $name<br>";
}

// EMAIL
if(empty($email)) {
    echo "Invalid email<br>";
} elseif(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = htmlspecialchars($email);
    echo "Your email is $email<br>";
} else {
    echo "Invalid email<br>";
}

}
?>
