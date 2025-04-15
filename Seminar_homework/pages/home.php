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
        <source src="assets/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<div class="map-section">
    <h2>Find Us Here</h2>
    <!-- Google Map -->
    <iframe 
        src="https://www.google.com/maps/place/Dabas/@47.1782111,19.2950824,12z/data=!3m1!4b1!4m6!3m5!1s0x47418dc0defaa747:0x6c8f85b1f8e7ec4b!8m2!3d47.1876108!4d19.3118999!16zL20vMDc3Mzlm?entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

</body>
</html>
<?php include 'footer.php'; ?>
