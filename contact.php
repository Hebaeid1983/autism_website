<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">Autism Assist</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact Section -->
<div class="container mt-5">
    <h2 class="text-center">Contact Us</h2>
    <p class="text-center">We are here to assist you. Feel free to contact us anytime.</p>

    <div class="row">
        <div class="col-md-6">
            <h4>Get in Touch</h4>
            <form action="contact_process.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Our Information</h4>
            <p><i class="fas fa-map-marker-alt"></i> Address: Autism Assist HQ, Jazan, Saudi Arabia</p>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:support@autismassist.com">support@autismassist.com</a></p>
            <p><i class="fas fa-phone"></i> Phone: +123 456 7890</p>
            <h4>Follow Us</h4>
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
