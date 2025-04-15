<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Travel Agency</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .video-section, .map-section {
            margin: 2rem auto;
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        iframe, video {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<h1 style="text-align: center; margin-top: 2rem;">Welcome to GlobeTrek Travel Agency 🌍✈️</h1>

<div class="video-section">
    <h2>Explore the World with Us – Watch This!</h2>
    <!-- YouTube embed -->
    <iframe src="https://www.youtube.com/watch?v=Z755vZBf9oM" 
            title="YouTube travel video"
            allowfullscreen>
    </iframe>
</div>

<div class="video-section">
    <h2>Your Journey Starts Here</h2>
    <!-- Local video -->
    <video controls>
        <source src="assets/videos/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<div class="map-section">
    <h2>Find Us Here</h2>
    <!-- Google Map -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086335800264!2d-122.41941518468142!3d37.77492977975995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c0f85787b%3A0x74c364b7aa30e5d3!2sSan%20Francisco!5e0!3m2!1sen!2sus!4v1615015441733" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

</body>
</html>
