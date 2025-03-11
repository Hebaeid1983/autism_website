<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Assist - AI Support</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom Styles */
        .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        background: #0056b3 !important; /* Dark Blue */
        transition: background 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Hover Effect for Nav Links */
    .navbar-nav .nav-link {
        color: white !important;
        font-weight: bold;
        transition: color 0.3s ease-in-out, background 0.3s ease-in-out;
        padding: 10px 15px;
        border-radius: 5px;
    }

    .navbar-nav .nav-link:hover {
        color: #ffcc00 !important; /* Gold on hover */
        background: rgba(255, 255, 255, 0.2); /* Light background effect */
    }

    /* Navbar Brand (Logo) */
    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Add spacing to prevent content from being hidden under the fixed navbar */
    body {
        padding-top: 70px;
    }
        .hero {
            background: url('https://tse4.mm.bing.net/th?id=OIP.88-jntkTkPUEXDuHyNvEaQHaEO&pid=Api&P=0&h=220') no-repeat center center/cover;
            color: white;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            padding: 100px 20px;
        }
        .gallery-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 100%;
        background:rgb(28, 163, 179);
        padding: 30px 0;

    }
    
    .gallery {
        display: flex;
        animation: scrollGallery 15s linear infinite;
    }

    .gallery img {
        width: 300px;
        height: auto;
        margin: 0 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    @keyframes scrollGallery {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(-100%);
        }
    }
        .footer {
            background:rgb(28, 163, 179);
            color: white;
            text-align: center;
            padding: 20px;
        }
        .footer a {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Autism Assist</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4">AI-Powered Support for Autism</h1>
        <h2 class="lead">Empowering parents & caregivers with AI-driven insights, medical resources, and expert support.<h2/>
        <br>
        <a href="register.php" class="btn btn-success btn-lg">Join Now</a>
    </div>
</section>
<hr>
<!-- About Section -->
<section id="about" class="py-5">
    <div class="container text-center">
        <h1>About Autism Assist</h1><br>
        <h4>We provide AI-driven tools to help parents, doctors, and caregivers manage autism-related information, recommendations, and support resources.</h4>
    </div>
</section>
<hr>
<!-- Services Section -->
<section id="services" class="bg-light py-5">
    <div class="container text-center">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <i class="fas fa-brain fa-3x text-primary"></i>
                <h4 class="mt-3">AI Therapy Recommendations</h4>
                <p>Personalized therapy suggestions based on your child's autism level.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-comments fa-3x text-primary"></i>
                <h4 class="mt-3">AI Chatbot</h4>
                <p>24/7 chatbot to answer common autism-related questions.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-newspaper fa-3x text-primary"></i>
                <h4 class="mt-3">Medical Articles</h4>
                <p>Access the latest research and autism medical resources.</p>
            </div>
        </div>
    </div>
</section>


<!-- Gallery Section -->
<section id="gallery" class="gallery-container">
    <div class="gallery">
        <img src="https://tse2.mm.bing.net/th?id=OIP.OZsn17JoLFejwsg7IbTY6QHaEh&pid=Api&P=0&h=220" alt="Autism Therapy">
        <img src="https://tse3.mm.bing.net/th?id=OIP.XWBVXk4bZ5A0dRKdSYjxLgHaE8&pid=Api&P=0&h=220" alt="Children Support">
        <img src="https://tse3.mm.bing.net/th?id=OIP.KrjVUxSH3s_6HVRpjwkDLwHaDt&pid=Api&P=0&h=220" alt="Family Care">
        <img src="https://tse1.mm.bing.net/th?id=OIP.-SFhw46b1zbtZJ9hWlXbeAHaE8&pid=Api&P=0&h=220" alt="Autism Therapy">
        <img src="https://tse4.mm.bing.net/th?id=OIP.aQdfGBYWxojc-QcYwyTMZwHaE8&pid=Api&P=0&h=220" alt="Children Support">
        <img src="https://tse4.mm.bing.net/th?id=OIP.1GBpb_dfbfE9s2WAUp3b_AHaE7&pid=Api&P=0&h=220" alt="Family Care">
        <img src="https://tse2.mm.bing.net/th?id=OIP.l7HKYgodSn0CNIzJe8PuRwHaE8&pid=Api&P=0&h=220" alt="Family Care">
        <img src="https://tse1.mm.bing.net/th?id=OIP.Q2jPQFfpivkrrtwOqfsPqAHaFw&pid=Api&P=0&h=220" alt="Autism Therapy">
        <img src="https://tse3.mm.bing.net/th?id=OIP.rcVgi6dh36zqsvC-b6wsTAHaD6&pid=Api&P=0&h=220" alt="Children Support">
        <img src="https://tse1.mm.bing.net/th?id=OIP.vAZfT7ooOqg9jpcDCLfhbAHaE7&pid=Api&P=0&h=220" alt="Family Care">
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container text-center">
        <h2>What Parents Say</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"This platform helped me understand my child's needs better. The AI recommendations are amazing!"</p>
                    <footer class="blockquote-footer">Sarah, Parent</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"A wonderful tool for early intervention and therapy planning. Highly recommended!"</p>
                    <footer class="blockquote-footer">Dr. John, Healthcare Provider</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"A great platform that connects parents with the right resources and expert advice."</p>
                    <footer class="blockquote-footer">Ahmed, Father of a child with autism</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- Contact Section -->
<section id="contact" class="bg-light py-5">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:support@autismassist.com">support@autismassist.com</a></p>
        <p>Phone: +123 456 7890</p>
        <p>Address: Autism Assist HQ, Jazan, Saudi Arabia</p>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <p>© 2024 Autism Assist. All Rights Reserved.</p>
    <p>
        <a href="https://www.who.int/">WHO Autism Resources</a> |
        <a href="https://www.autismspeaks.org/">Autism Speaks</a> |
        <a href="https://www.cdc.gov/ncbddd/autism/index.html">CDC Autism Info</a>
    </p>
    <p>
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
