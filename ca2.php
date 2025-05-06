<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1~.0">
    <title>Form validation</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        <h1>Student Feedback Form</h1>
        Name: <input type="text" name="name" value="<?php echo $name; ?>" >
        
        <br><br>
        
        Email: <input type="email" name="email" value="<?php echo $email; ?>" >
        <br><br>
        
        Course: <select name="course" id="course">
            <option value="INT219"><?php echo $course[0] ?></option>
            <option value="INT220"><?php echo $course[1] ?></option>
        </select>
<br><br>
        Feedback <input type="textarea" name="feedback">
        <br><br>
        
        <input type="submit" name="submit" value="Submit Feedback">
    </form>
</body>
</html>