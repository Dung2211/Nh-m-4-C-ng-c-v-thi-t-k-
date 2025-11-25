<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fitlife_gym";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => $conn->connect_error]));
}

$conn->set_charset("utf8");
?>
