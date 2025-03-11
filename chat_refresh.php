<?php
session_start();
include 'config.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT messages.*, users.name 
        FROM messages 
        JOIN users ON messages.sender_id = users.id 
        WHERE sender_id = '$user_id' OR receiver_id = '$user_id' 
        ORDER BY created_at ASC";

$result = mysqli_query($conn, $sql);
$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($messages as $msg) {
    echo "<p><strong>" . htmlspecialchars($msg['name']) . ":</strong> " . htmlspecialchars($msg['message']) . "</p>";
}
?>
