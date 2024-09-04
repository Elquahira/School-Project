<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_id = $_POST['room_id'];
    $hotel_code = $_POST['hotel_code'];
    $room_type_id = $_POST['room_type_id'];
    $total_no_of_days = $_POST['total_no_of_days'];
    $room_charge = $_POST['room_charge'];
    $utility_charge = $_POST['utility_charge'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO room_info (room_id, hotel_code, room_type_id, total_no_of_days, room_charge, utility_charge, status, created_date, created_by)
            VALUES (:room_id, :hotel_code, :room_type_id, :total_no_of_days, :room_charge, :utility_charge, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':room_id' => $room_id,
        ':hotel_code' => $hotel_code,
        ':room_type_id' => $room_type_id,
        ':total_no_of_days' => $total_no_of_days,
        ':room_charge' => $room_charge,
        ':utility_charge' => $utility_charge,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Room information added successfully.";
}
?>
