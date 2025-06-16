<?php
$conn = new mysqli("localhost", "root", "", "anonymous_exe");
$data = json_decode(file_get_contents("php://input"), true);
$message = $data['message'];
$conn->query("INSERT INTO chat (message) VALUES ('$message')");
?>
