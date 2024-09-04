<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $customer_name = $_POST['customer_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $post_code = $_POST['post_code'];
    $mobile_number = $_POST['mobile_number']; // Corrected variable name
    $dob = $_POST['dob']; // Corrected variable name
    $identity_type = $_POST['identity_type']; // Corrected variable name
    $status = $_POST['status'];
    $gender = $_POST['gender']; // Corrected variable name
    $maritual_status = $_POST['maritual_status']; // Corrected variable name
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    // Prepare SQL query with placeholders
    $sql = "INSERT INTO customer (Customer_name, Last_name, Address, Post_code, Mobile_number, DOB, Identity_type, Status, Gender, Maritual_status, Created_date, Created_by)
            VALUES (:customer_name, :last_name, :address, :post_code, :mobile_number, :dob, :identity_type, :status, :gender, :maritual_status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);

    // Execute query with bound parameters
    try {
        $stmt->execute([
            ':customer_name' => $customer_name,
            ':last_name' => $last_name,
            ':address' => $address,
            ':post_code' => $post_code,
            ':mobile_number' => $mobile_number,
            ':dob' => $dob,
            ':identity_type' => $identity_type,
            ':status' => $status,
            ':gender' => $gender,
            ':maritual_status' => $maritual_status,
            ':created_date' => $created_date,
            ':created_by' => $created_by
        ]);
        echo "Customer information added successfully.";
        echo "<script>window.open('staff dashboard.html','_self')</script>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
