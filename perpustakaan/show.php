<?php
include 'buku.php';

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
</head>
<body>
    <h1>Show Book</h1>
    <p>ID: <?php echo $row["id"]; ?></p>
    <p>Title: <?php echo $row["title"]; ?></p>
    <p>Author: <?php echo $row["author"]; ?></p>
    <p>Published Year: <?php echo $row["published_year"]; ?></p>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>