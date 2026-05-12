<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf3; /* cream white */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #d8c4ff; /* light purple */
            padding: 25px;
            width: 420px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #3b2f63;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 12px;
            border: none;
            border-radius: 6px;
        }

        input[type="submit"] {
            background-color: #7a5cff;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #5a3de6;
        }

        .error {
            color: red;
            font-size: 13px;
        }

        .result {
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Student Registration</h2>

<?php
// variables
$name = $email = $gender = $course = $hobbies = $message = "";
$nameErr = $emailErr = $genderErr = $courseErr = "";

// sanitize function
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = clean($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = clean($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = clean($_POST["gender"]);
    }

    // Course validation
    if (empty($_POST["course"])) {
        $courseErr = "Course is required";
    } else {
        $course = clean($_POST["course"]);
    }

    // optional fields
    $hobbies = !empty($_POST["hobbies"]) ? clean($_POST["hobbies"]) : "None";
    $message = !empty($_POST["message"]) ? clean($_POST["message"]) : "No message";
}
?>

<form method="POST" action="">
    
    Name:
    <input type="text" name="name">
    <div class="error"><?php echo $nameErr; ?></div>

    Email:
    <input type="text" name="email">
    <div class="error"><?php echo $emailErr; ?></div>

    Gender:
    <select name="gender">
        <option value="">--Select--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <div class="error"><?php echo $genderErr; ?></div>

    Course:
    <select name="course">
        <option value="">--Select Course--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">CSS</option>
        <option value="BSA">BSOA</option>
    </select>
    <div class="error"><?php echo $courseErr; ?></div>

    Hobbies:
    <input type="text" name="hobbies" placeholder="e.g. Reading, Gaming">

    Message:
    <textarea name="message" rows="3"></textarea>

    <input type="submit" value="Register">
</form>

<?php
// display result if form is submitted and no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$genderErr && !$courseErr) {
    echo "<div class='result'>";
    echo "<h3>Submitted Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender <br>";
    echo "Course: $course <br>";
    echo "Hobbies: $hobbies <br>";
    echo "Message: $message <br>";
    echo "</div>";
}
?>

</div>

</body>
</html
