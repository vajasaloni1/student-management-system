<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students (name,email,course) 
    VALUES ('$name','$email','$course')");

    header("Location: index.php");
}
?>

<html>
    <head>
      <title>Add</title>
      <style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: #eef2f7;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-item: center;
}

form {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    width: 300px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    animation: fadeIn 0.8s ease-in-out;
}

h2 {
    text-align: center;
    color: #222;
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    display: block;
    margin-top: 10px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ccc;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-color: #667eea;
    box-shadow: 0 0 8px rgba(102,126,234,0.5);
}

button {
    width: 100%;
    margin-top: 20px;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
      </style>
    </head>
 <body>
<form method="POST">
    <h2>Add student</h2>
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>
    <button type="submit" name="submit">Save</button>
    <a href="index.php">
        <button type="button">View</button></a>
</body>
</html>