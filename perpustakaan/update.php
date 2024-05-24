<?php
include 'buku.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];

    $sql = "UPDATE books SET title='$title', author='$author', published_year=$published_year WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST">
        <p>Title: <input type="text" name="title" value="<?php echo $row['title']; ?>"></p>
        <p>Author: <input type="text" name="author" value="<?php echo $row['author']; ?>"></p>
        <p>Published Year: <input type="number" name="published_year" value="<?php echo $row['published_year']; ?>"></p>
        <p><input type="submit" value="Update"></p>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>