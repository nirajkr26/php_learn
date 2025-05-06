<?php
// ---------- DATABASE CONNECTION ----------
$conn = new mysqli("localhost", "root", "", "library");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ---------- HANDLE ADD BOOK ----------
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $stmt = $conn->prepare("INSERT INTO books (title, author) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $author);
    $stmt->execute();
    header("Location: library.php");
    exit();
}

// ---------- HANDLE BORROW ----------
if (isset($_GET['borrow'])) {
    $id = (int)$_GET['borrow'];
    $conn->query("UPDATE books SET available = 0 WHERE id = $id");
    header("Location: library.php");
    exit();
}

// ---------- HANDLE RETURN ----------
if (isset($_GET['return'])) {
    $id = (int)$_GET['return'];
    $conn->query("UPDATE books SET available = 1 WHERE id = $id");
    header("Location: library.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Library System</title>
</head>
<body>
    <h1>📚 Library Management</h1>

    <!-- Add Book Form -->
    <h3>Add a New Book</h3>
    <form method="post" action="library.php">
        Title: <input type="text" name="title" required>
        Author: <input type="text" name="author" required>
        <input type="submit" name="add" value="Add Book">
    </form>

    <!-- Book List -->
    <h3>Available Books</h3>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Title</th><th>Author</th><th>Status</th><th>Action</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM books");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['author']) ?></td>
            <td><?= $row['available'] ? 'Available' : 'Borrowed' ?></td>
            <td>
                <?php if ($row['available']): ?>
                    <a href="?borrow=<?= $row['id'] ?>">Borrow</a>
                <?php else: ?>
                    <a href="?return=<?= $row['id'] ?>">Return</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>


<!--
CREATE DATABASE IF NOT EXISTS library;
USE library;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    available BOOLEAN DEFAULT 1
);


                -->