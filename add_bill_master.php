<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $invoice_no = $_POST['invoice_no'];
    $customer_id = $_POST['customer_id'];
    $booking_id = $_POST['booking_id'];
    $credit_card_no = $_POST['credit_card_no'];
    $discount = $_POST['discount'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO bill_master (Invoice_no, Customer_id, Booking_id, Credit_card_no, Discount, Status, Created_date, Created_by)
            VALUES (:invoice_no, :customer_id, :booking_id, :credit_card_no, :discount, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':invoice_no' => $invoice_no,
        ':customer_id' => $customer_id,
        ':booking_id' => $booking_id,
        ':credit_card_no' => $credit_card_no,
        ':discount' => $discount,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Invoice information added successfully.";
    echo "<script>window.open('staff dashboard.html','_self')</script>";
}
?>
