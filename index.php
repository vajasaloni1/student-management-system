<?php include 'db.php'; ?>
<html>
<head>
    <title>Index</title>
    <style>
        body {
    font-family: 'Segoe UI', sans-serif;
    background: #eef2f7;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #222;
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    padding: 8px 14px;
    border-radius: 6px;
    font-size: 14px;
    transition: 0.3s;
}
    table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

table th {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    color: white;
    padding: 12px;
}

table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

table tr:hover {
    background: #f1f6ff;
}

/* Buttons */
a[href*="edit"] {
    background: #28a745;
    color: white;
}

a[href*="delete"] {
    background: #dc3545;
    color: white;
}

a[href*="add"] {
    background: #007bff;
    color: white;
    display: inline-block;
    margin-bottom: 15px;
}
 </style>
</head>

<body>
<h2>Student List</h2>
<a href="add.php">Add Student</a>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>"
          onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>