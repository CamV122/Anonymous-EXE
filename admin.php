<?php
$conn = new mysqli("localhost", "root", "", "anonymous_exe");

$data = json_decode(file_get_contents("php://input"), true);
if ($data["action"] == "delete") {
    $conn->query("DELETE FROM chat WHERE id=" . $data["message_id"]);
} elseif ($data["action"] == "ban") {
    $conn->query("UPDATE users SET banned=1 WHERE id=" . $data["user_id"]);
}
?>
