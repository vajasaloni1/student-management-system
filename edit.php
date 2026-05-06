<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET 
    name='$name', email='$email', course='$course' WHERE id=$id");

    header("Location: index.php");
}
?>

<html>
    <head>
      <title>Edit</title>
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

form {
    width: 400px;
    margin: auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-top: 5px solid #6f42c1;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 6px;
}

input:focus {
    border-color: #6f42c1;
    outline: none;
}

button {
    width: 100%;
    background: linear-gradient(135deg, #6f42c1, #9b59b6);
    color: white;
    padding: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

button:hover {
    opacity: 0.9;
}
      </style>
    </head>
    <body>
        <h2>Edit Form</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    Course: <input type="text" name="course" value="<?php echo $data['course']; ?>"><br>
    <button type="submit" name="update">Update</button>
</form>
</body>