<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Resources</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Custom Styles */
        .resource-img {
            width: 100%;
            height: 200px; /* Fixed height for uniform size */
            object-fit: cover; /* Ensures images scale properly */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .info-section {
            margin-top: 40px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        .test-section {
            margin-top: 40px;
            text-align: center;
        }
        .test-section a {
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="autism_resources.php">Autism Resources</a></li>
                <li class="nav-item"><a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container mt-5">
    <h2 class="text-center text-primary">Autism Resources & Support</h2>
    <p class="text-center text-muted">Learn more about autism, take tests, and find support.</p>

    <!-- Images Section -->
    <div class="row text-center mt-4">
        <div class="col-md-4">
            <img src="https://tse2.mm.bing.net/th?id=OIP.OZsn17JoLFejwsg7IbTY6QHaEh&pid=Api&P=0&h=220" class="resource-img" alt="Autism Therapy">
            <p class="mt-2 fw-bold">Therapy & Support for Autism</p>
        </div>
        <div class="col-md-4">
            <img src="https://tse3.mm.bing.net/th?id=OIP.XWBVXk4bZ5A0dRKdSYjxLgHaE8&pid=Api&P=0&h=220" class="resource-img" alt="Children Support">
            <p class="mt-2 fw-bold">Support for Children with Autism</p>
        </div>
        <div class="col-md-4">
            <img src="https://tse3.mm.bing.net/th?id=OIP.KrjVUxSH3s_6HVRpjwkDLwHaDt&pid=Api&P=0&h=220" class="resource-img" alt="Family Care">
            <p class="mt-2 fw-bold">Family & Community Care</p>
        </div>
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <h3 class="text-primary">Understanding Autism</h3>
        <p>Autism, or Autism Spectrum Disorder (ASD), is a developmental condition that affects communication, social skills, and behavior. Each individual with autism is unique, and support strategies vary.</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">✅ Early diagnosis and intervention can improve outcomes.</li>
            <li class="list-group-item">✅ Therapies such as ABA, speech therapy, and occupational therapy help manage autism.</li>
            <li class="list-group-item">✅ Many individuals with autism lead independent and fulfilling lives with the right support.</li>
        </ul>
    </div>

    <!-- Autism Test Section -->
    <div class="test-section">
        <h3 class="text-primary">Take an Autism Test</h3>
        <p>Check your child's developmental progress with our AI-powered autism screening test.</p>
        <a href="autism_test.php" class="btn btn-primary">Start Autism Test</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
