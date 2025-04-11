<?php
require_once "school.php"; 
$query = "SELECT b.Book_ID, b.Title, b.Author, b.Issued_Date, b.Return_Date, p.First_Name, p.Last_Name
          FROM BOOKS b
          LEFT JOIN PUPILS p ON b.Pupil_ID = p.Pupil_ID";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Library Books List</h2>
        <table>
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Issued Date</th>
                    <th>Return Date</th>
                    <th>Pupil Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($book = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $book['Book_ID'] ?></td>
                        <td><?= $book['Title'] ?></td>
                        <td><?= $book['Author'] ?></td>
                        <td><?= $book['Issued_Date'] ?></td>
                        <td><?= $book['Return_Date'] ?></td>
                        <td><?= $book['First_Name'] . ' ' . $book['Last_Name'] ?></td>
                        <td>
                            <a href="edit_book.php?id=<?= $book['Book_ID'] ?>" class="btn">Edit</a>
                            <a href="delete_book.php?id=<?= $book['Book_ID'] ?>" class="btn" style="background-color: red;">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="add_book.php" class="btn">Add New Book</a>
    </div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
