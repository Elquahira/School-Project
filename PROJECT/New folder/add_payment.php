<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payment_id = $_POST['payment_id'];
    $bill_id = $_POST['bill_id'];
    $payment_date = $_POST['payment_date'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO payment (payment_id, bill_id, payment_date, amount, status, created_date, created_by)
            VALUES (:payment_id, :bill_id, :payment_date, :amount, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':payment_id' => $payment_id,
        ':bill_id' => $bill_id,
        ':payment_date' => $payment_date,
        ':amount' => $amount,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Payment information added successfully.";
}
?>
