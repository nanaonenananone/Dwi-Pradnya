<?php
include 'buku.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Book List</h1>
    <a href="create.php">Add New Book</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["author"]; ?></td>
            <td><?php echo $row["published_year"]; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row["id"]; ?>">Show</a>
                <a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>