<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';  // Default role if not set

// Handle new messages
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    $message = trim($_POST['message']);
    $receiver_id = $_POST['receiver_id']; // User selects who to send message to

    if (!empty($message)) {
        $insert_sql = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ('$user_id', '$receiver_id', '$message')";
        mysqli_query($conn, $insert_sql);
    }
    exit();
}

// Get all messages (sent and received)
$sql = "SELECT messages.*, users.name 
        FROM messages 
        JOIN users ON messages.sender_id = users.id 
        WHERE sender_id = '$user_id' OR receiver_id = '$user_id' 
        ORDER BY created_at ASC";
$result = mysqli_query($conn, $sql);
$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get a list of users to chat with
$users_sql = "SELECT id, name FROM users WHERE id != '$user_id'";
$users_result = mysqli_query($conn, $users_sql);
$users = mysqli_fetch_all($users_result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Healthcare Provider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .chat-box {
            height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">User Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Chat Section -->
<div class="container mt-5">
    <h2 class="text-center">Chat with Healthcare Providers</h2>

    <div class="chat-box mb-3" id="chat-box">
        <?php foreach ($messages as $msg): ?>
            <p><strong><?php echo htmlspecialchars($msg['name']); ?>:</strong> <?php echo htmlspecialchars($msg['message']); ?></p>
        <?php endforeach; ?>
    </div>

    <!-- Message Form -->
    <form id="chat-form">
        <div class="mb-3">
            <label for="receiver">Send To:</label>
            <select name="receiver_id" id="receiver" class="form-select" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo htmlspecialchars($user['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <textarea name="message" id="message" class="form-control" placeholder="Type a message..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function loadMessages() {
        fetch('chat_refresh.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('chat-box').innerHTML = data;
                document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
            });
    }

    document.getElementById('chat-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let message = document.getElementById('message').value;
        let receiver = document.getElementById('receiver').value;

        fetch('chat.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'message=' + encodeURIComponent(message) + '&receiver_id=' + encodeURIComponent(receiver)
        }).then(() => {
            document.getElementById('message').value = '';
            loadMessages();
        });
    });

    setInterval(loadMessages, 3000); // Auto-refresh messages every 3 seconds
    loadMessages(); // Load messages on page load
</script>
</body>
</html>
