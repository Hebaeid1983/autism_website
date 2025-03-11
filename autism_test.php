<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Screening Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

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

<!-- Autism Test -->
<div class="container mt-5">
    <h2 class="text-center text-primary">Autism Screening Test</h2>
    <p class="text-center text-muted">Answer the following questions to assess potential autism symptoms.</p>

    <form action="autism_test_results.php" method="POST" class="p-4 bg-white shadow rounded">
        <div class="mb-3">
            <label class="form-label fw-bold">1. Does your child avoid eye contact?</label>
            <select name="q1" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">2. Does your child struggle with social interactions?</label>
            <select name="q2" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">3. Does your child repeat actions or words frequently?</label>
            <select name="q3" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">4. Does your child show sensitivity to sounds, lights, or textures?</label>
            <select name="q4" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">5. Does your child have difficulty adapting to changes in routine?</label>
            <select name="q5" class="form-select">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Get Results</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
