<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}


// Simulating AI-based autism recommendations
$autism_level = "moderate"; // Example value
$url = "http://127.0.0.1:5000/get_recommendation";
$data = json_encode(["autism_level" => $autism_level]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
curl_close($ch);

$recommendation = json_decode($response, true);

$advice = $recommendation['recommendation'] ?? "⚠️ AI advice is currently unavailable.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">User Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="autism_resources.php">Autism Resources</a></li>
                <li class="nav-item"><a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Welcome Section -->
<div class="container mt-5 text-center" style="padding-top: 80px;">
    <h2>Welcome to Your Dashboard</h2>
    <p class="lead">Explore our AI-powered tools and services designed to support parents and caregivers.</p>
</div>

<!-- AI Autism Advice Section -->
<div class="container mt-4">
    <div class="alert alert-info text-center">
        <strong>AI Advice:</strong> <?php echo $advice; ?>
    </div>
</div>

<!-- Services Section -->
<center><a href="chatbot.html" class="btn btn-success">Chatbot with AI</a></center>

<div class="container mt-4">
    <h3 class="text-center mb-4">Our Services</h3>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <i class="fas fa-diagnoses fa-3x text-primary"></i>
                    <h5 class="mt-3">Autism Test</h5>
                    <p>Take our AI-powered autism screening test.</p>
                    <a href="autism_test.php" class="btn btn-primary">Start Test</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <i class="fas fa-lightbulb fa-3x text-warning"></i>
                    <h5 class="mt-3">AI Advice</h5>
                    <p>Receive personalized autism advice.</p>
                    <a href="ai_advice.php" class="btn btn-warning">View Advice</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x text-success"></i>
                    <h5 class="mt-3">Parent Resources</h5>
                    <p>Access articles, guides, and community support.</p>
                    <a href="parent_services.php" class="btn btn-success">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <i class="fas fa-comments fa-3x text-danger"></i>
                    <h5 class="mt-3">Chat with Experts</h5>
                    <p>Connect with healthcare providers online.</p>
                    <a href="chat.php" class="btn btn-danger">Start Chat</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
