<?php
require "db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$position = $_POST["position"];
$phone = $_POST["phone"];
$status = $_POST["status"];

/* KIỂM TRA SỐ ĐIỆN THOẠI */
$check = $conn->query("SELECT id FROM employees WHERE phone = '$phone' AND id != $id");

if ($check->num_rows > 0) {
    echo json_encode(["status" => "exist"]);
    exit;
}

$sql = "UPDATE employees SET 
        name='$name', gender='$gender', position='$position',
        phone='$phone', status='$status'
        WHERE id=$id";

if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}

?>
