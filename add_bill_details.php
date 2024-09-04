<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bill_details_id = $_POST['bill_details_id'];
    $bill_id = $_POST['bill_id'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO bill_details (bill_details_id, bill_id, item, quantity, amount, status, created_date, created_by)
            VALUES (:bill_details_id, :bill_id, :item, :quantity, :amount, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':bill_details_id' => $bill_details_id,
        ':bill_id' => $bill_id,
        ':item' => $item,
        ':quantity' => $quantity,
        ':amount' => $amount,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Bill details information added successfully.";
}
?>
