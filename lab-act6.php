<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
 Email: <input type="text" name="email">
 <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

if(empty($_POST["email"])) {
    echo "Invalid email";
} else {
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Your email is " . $email;
    } else {
        echo "Invalid email";
    }
}

}
?>

</body>
</html>
