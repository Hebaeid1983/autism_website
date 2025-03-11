<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Calculate the score
$score = 0;
$score += ($_POST['q1'] == "yes") ? 1 : 0;
$score += ($_POST['q2'] == "yes") ? 1 : 0;
$score += ($_POST['q3'] == "yes") ? 1 : 0;
$score += ($_POST['q4'] == "yes") ? 1 : 0;
$score += ($_POST['q5'] == "yes") ? 1 : 0;

// Determine the autism risk level and personalized program
if ($score == 0) {
    $result = "No Risk";
    $advice = "Your child shows no signs of autism. Continue fostering a supportive and engaging environment.";
    $program = "
        <h4>Recommended Actions:</h4>
        <ul>
            <li>Encourage diverse social interactions and playtime.</li>
            <li>Monitor developmental milestones as your child grows.</li>
            <li>Provide a structured routine while allowing flexibility.</li>
        </ul>";
} elseif ($score <= 2) {
    $result = "Mild Risk";
    $advice = "Your child may have some mild traits of autism. Observing behavior over time and introducing supportive strategies can be beneficial.";
    $program = "
        <h4>Recommended Program:</h4>
        <ul>
            <li><strong>Social Skills Training:</strong> Encourage interactive games and role-playing.</li>
            <li><strong>Speech & Communication:</strong> Use storytelling and visual cues to enhance speech.</li>
            <li><strong>Routine & Predictability:</strong> Create a consistent daily schedule with clear expectations.</li>
            <li><strong>Professional Evaluation:</strong> If concerns persist, consider consulting a pediatric specialist.</li>
        </ul>";
} elseif ($score <= 3) {
    $result = "Moderate Risk";
    $advice = "Your child may display moderate traits of autism. Early intervention and structured support are recommended.";
    $program = "
        <h4>Structured Therapy Plan:</h4>
        <ul>
            <li><strong>Speech Therapy:</strong> Work on expressive and receptive communication using visual aids.</li>
            <li><strong>Behavioral Support:</strong> Implement positive reinforcement strategies for social engagement.</li>
            <li><strong>Sensory Processing:</strong> Introduce sensory-friendly activities (weighted blankets, fidget toys).</li>
            <li><strong>Early Intervention:</strong> Consult an occupational therapist to assess motor and social skills.</li>
            <li><strong>Parental Coaching:</strong> Join autism support groups to connect with professionals and caregivers.</li>
        </ul>";
} else {
    $result = "High Risk";
    $advice = "Your child exhibits significant traits of autism. A professional evaluation and a structured support plan are strongly recommended.";
    $program = "
        <h4>Comprehensive Intervention Plan:</h4>
        <ul>
            <li><strong>Applied Behavior Analysis (ABA):</strong> Work on structured learning strategies tailored to your child's needs.</li>
            <li><strong>Occupational Therapy (OT):</strong> Develop sensory integration skills through specialized therapy.</li>
            <li><strong>Specialized Speech Therapy:</strong> Use assistive communication devices if verbal challenges are present.</li>
            <li><strong>Daily Living Skills Training:</strong> Support independence with structured routines.</li>
            <li><strong>Special Education Programs:</strong> Explore Individualized Education Programs (IEPs) for school support.</li>
            <li><strong>Family Support & Advocacy:</strong> Seek professional counseling and join parent coaching sessions.</li>
        </ul>
        <p><strong>Next Steps:</strong> <a href='https://www.autismspeaks.org/'>Find a local autism specialist</a> for further assessment.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Test Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Autism Test Results</h2>
    
    <div class="alert alert-info text-center">
        <strong>Test Score:</strong> <?php echo $score; ?>
    </div>
    <div class="alert alert-warning text-center">
        <strong>Risk Level:</strong> <?php echo $result; ?>
    </div>
    <div class="alert alert-success text-center">
        <strong>AI Advice:</strong> <?php echo $advice; ?>
    </div>

    <div class="mt-4 p-4 bg-white shadow rounded">
        <?php echo $program; ?>
    </div>

    <div class="text-center mt-4">
        <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
