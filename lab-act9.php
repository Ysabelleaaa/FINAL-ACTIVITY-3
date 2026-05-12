<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
 Message: <textarea name="message" rows="5" cols="50"></textarea>
 <input type="submit">
</form>

<?php
if(empty($_POST["message"])) {
 echo "Please add a message.";
} else {
 echo "Your message: " . $_POST['message'];
}
?>

</body>
</html>
