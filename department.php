<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #2980b9, #f4f4f4); /* Blue fading to light grey */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #2980b9;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container input[type="submit"],
        .form-container button {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .form-container input[type="submit"]:hover,
        .form-container button:hover {
            background-color: #1c5984;
        }

        .form-container button {
            background-color: #ccc;
            color: #333;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Department Information</h2>
        <form action="department.php" method="POST">
       
            <label for="dept_name">Department Name:</label>
            <input type="text" id="dept_name" name="dept_name" required>

            <label for="dept_desc">Department Description:</label>
            <textarea id="dept_desc" name="dept_desc" rows="4" required></textarea>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>

            <label for="created_date">Created Date:</label>
            <input type="date" id="created_date" name="created_date" required>

            <label for="created_by">Created By:</label>
            <input type="text" id="created_by" name="created_by" required>

            <input type="submit" value="Submit">
            <button type="button" onclick="history.back()">Back</button>
        </form>
    </div>
</body>
</html>


<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $dept_name = $_POST['dept_name'];
    $dept_desc = $_POST['dept_desc'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO departments(Dept_name, Dept_description, Status, Created_date, Created_by)
            VALUES (:dept_name, :dept_desc, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        
        ':dept_name' => $dept_name,
        ':dept_desc' => $dept_desc,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Department information added successfully.";
    echo "<script>window.open('Admindashboard.php','_self')</script>";
}
?>

