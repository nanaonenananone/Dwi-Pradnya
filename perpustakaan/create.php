<?php
include 'buku.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];

    $sql = "INSERT INTO books (title, author, published_year) VALUES ('$title', '$author', $published_year)";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST">
        <p>Title: <input type="text" name="title"></p>
        <p>Author: <input type="text" name="author"></p>
        <p>Published Year: <input type="number" name="published_year"></p>
        <p><input type="submit" value="Add"></p>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>