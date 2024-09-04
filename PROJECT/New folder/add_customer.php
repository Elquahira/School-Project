<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $post_code = $_POST['post_code'];
    $mobile_name = $_POST['mobile_name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO customer_info (customer_id, customer_name, last_name, address, post_code, mobile_name, email, status, created_date, created_by)
            VALUES (:customer_id, :customer_name, :last_name, :address, :post_code, :mobile_name, :email, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':customer_id' => $customer_id,
        ':customer_name' => $customer_name,
        ':last_name' => $last_name,
        ':address' => $address,
        ':post_code' => $post_code,
        ':mobile_name' => $mobile_name,
        ':email' => $email,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Customer information added successfully.";
}
?>
