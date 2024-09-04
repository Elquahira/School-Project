<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking_id = $_POST['booking_id'];
    $room_id = $_POST['room_id'];
    $customer_id = $_POST['customer_id'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $status = $_POST['status'];
    $phone_no = $_POST['phone_no'];
    $identity_type = $_POST['identity_type'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO booking (Booking_id, Room_id, Customer_id, Check_in, Check_out, Status, Phone_no, Identity_type, Created_date, Created_by)
            VALUES (:booking_id, :room_id, :customer_id, :check_in, :check_out, :status, :phone_no, :identity_type, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':booking_id' => $booking_id,
        ':room_id' => $room_id,
        ':customer_id' => $customer_id,
        ':check_in' => $check_in,
        ':check_out' => $check_out,
        ':status' => $status,
        ':phone_no' => $phone_no,
        ':identity_type' => $identity_type,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Booking information added successfully.";
    echo "<script>window.open('staff dashboard.html','_self')</script>";
}
?>
