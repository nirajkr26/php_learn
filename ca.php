<?php
session_start();
$_SESSION["name"] = $_POST["name"];
$_SESSION["course"] = $_POST["course"];
$name = $email = $feedback = $subject = "";
$nameErr = $emailErr = $feedbackErr = "";
$course = ["INT219-Frontend development", "INT220-Server Side Scripting"];
$strCount = 0;

if (empty($_POST['name'])) {
    $nameErr = "name is empty";
} else {
    $name = test_input($_POST['name']);
}
if (empty($_POST['email'])) {
    $emailErr = "email is empty";
} else {
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}
if (empty($_POST['feedback'])) {
    $feedbackErr = "feedback is empty";
} else {
    $feedback = test_input($_POST['feedback']);
    $strCount = str_word_count($feedback);
}
$subject = $_POST['course'];


function test_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1~.0">
    <title>Form validation</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h1>Student Feedback Form</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><span><?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">Email:</label><input type="email" name="email" value="<?php echo $email; ?>"><span><?php echo $emailErr; ?></span>
        <br><br>

        <label for="course">Course:</label><select name="course" id="course">
            <option value="INT219"><?php echo $course[0] ?></option>
            <option value="INT220"><?php echo $course[1] ?></option>
        </select>
        <br><br>

        <label for="feedback">Feedback:</label><input type="textarea" name="feedback"><span><?php echo $feedbackErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit Feedback">
    </form>

    <p>
        <?php
        echo "Thank you " . $name . "<br>";
        echo "You submitted feedback for course:" . $subject . "<br>";
        echo "Your feedback:<br>";
        echo $feedback . "<br>";
        echo "Word Count of your feedback:" . $strCount . "<br>";
        ?>
    </p>
</body>

</html>