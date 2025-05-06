<?php
// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpPath = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = mime_content_type($fileTmpPath);

        // Allowed file types and max size
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxSize = 3 * 1024 * 1024; // 3MB

        if (in_array($fileType, $allowedTypes) && $fileSize <= $maxSize) {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $destination = $uploadDir . basename($fileName);
            if (move_uploaded_file($fileTmpPath, $destination)) {
                $message = "File uploaded successfully!";
            } else {
                $message = "Failed to move uploaded file.";
            }
        } else {
            $message = "Invalid file type or file size exceeds 3MB.";
        }
    } else {
        $message = "No file uploaded or an error occurred.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IMAGE GALLERY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            margin-top: 20px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>PHP IMAGE GALLERY</h2>
    <?php if (isset($message)) echo "<p>$message</p>"; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <div class="gallery">
        <?php
        $uploadDir = 'uploads/';
        if (is_dir($uploadDir)) {
            $images = array_diff(scandir($uploadDir), ['.', '..']);
            foreach ($images as $image) {
                echo "<img src='$uploadDir$image' alt='Uploaded Image'>";
            }
        }
        ?>
    </div>
</body>
</html>