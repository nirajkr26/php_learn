<?php
// Define associative array of course codes and names
$courses = array(
    "CSE101" => "Introduction to Programming",
    "CSE102" => "Data Structures",
    "CSE103" => "Web Development",
    "CSE104" => "Database Systems"
);

// Function to display result after form submission
function displayResult($name, $code, $courseList) {
    if (array_key_exists($code, $courseList)) {
        $courseName = $courseList[$code];
        echo "<h3 style='color:green;'>$name, you have successfully registered for <strong>$courseName ($code)</strong>.</h3>";
    } else {
        echo "<h3 style='color:red;'>Invalid course selection.</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Registration</title>
</head>
<body>

<h2 style="color:blue;">Course Registration Portal</h2><hr>

<?php
// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $course_code = $_POST["course_code"];
    displayResult($name, $course_code, $courses);
} else {
?>

<!-- Registration Form -->
<form method="POST">
    <label><strong>Name:</strong></label>
    <input type="text" name="name" required><br><br>

    <label><strong>Select Course:</strong></label>
    <select name="course_code">
        <?php
        foreach ($courses as $code => $course) {
            echo "<option value=\"$code\">$course</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="Register">
</form>

<?php } ?>

</body>
</html>
