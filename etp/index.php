<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $filename = $file['name'];
        $fileTemp = $file['tmp_name'];
        $fileSize = $file['size'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $allowed= ['jpeg', 'png', 'gif'];
        $maxSize = 3 * 1024 * 1024;
        if (in_array($ext, $allowed) && $fileSize <= $maxSize) {
            $uploadDir = 'uploads/';
            $destination = $uploadDir . basename($filename);
            if (move_uploaded_file($fileTemp, $destination)) {
                $message = "File upload successfull";
            } else {
                $message = "Failed";
            }
        } else {
            $message = "Invalid file /file size more than 3MB.";
        }
    } else {
        $message = "No file uploaded";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Image Gallery</title>
    <style>
        div {
            display: grid;
            gap: 10px;
            margin-top: 20px;
        }
        img {
            width: 100px;
            height: 100px;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h2>PHP Image Gallery</h2>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
        <?php if (isset($message)) echo "<p>$message</p>"; ?>
    </form>
    <div>
        <?php
        $uploadDir = 'uploads/';
        if (is_dir($uploadDir)) {
            $images = array_diff(scandir($uploadDir), ['.', '..']);
            foreach ($images as $image) {
                echo "<img src='$uploadDir$image'>";
            }
        }
        ?>
    </div>
</body>
</html>
