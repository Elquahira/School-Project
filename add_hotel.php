
<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hotel_code = $_POST['hotel_code'];
    $emp_id = $_POST['emp_id'];
    $location = $_POST['location'];
    $last = $_POST['last'];
    $hotel_name = $_POST['hotel_name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO hotel (Hotel_code, Emp_id, Location, Last, Hotel_name, Email, Status, Created_date, Created_by)
            VALUES (:hotel_code, :emp_id, :location, :last, :hotel_name, :email, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':hotel_code' => $hotel_code,
        ':emp_id' => $emp_id,
        ':location' => $location,
        ':last' => $last,
        ':hotel_name' => $hotel_name,
        ':email' => $email,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Hotel information added successfully.";
    echo "<script>window.open('Admindashboard.php','_self')</script>";
}  
?>
