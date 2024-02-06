<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPARKLE RECREATION CLUB</title>
    <style>
        body {
            font-family: 'monospace', 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .navbar {
            background-color: #808080;
            overflow: hidden;
            text-align: center;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            display: inline-block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 24px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: #333;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: #fff;
        }

        .content h1 {
            font-family: 'monospace', 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 25px;
            color: #555;
            border: 2px solid #999;
            border-radius: 10px;
            padding: 10px;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Main content styles */
        .content {
            padding: 80px 16px;
            text-align: center;
        }

        .content h1 {
            color: #333;
        }

        .content p {
            color: #666;
            font-size: 22px;
            line-height: 1.6;
            font-weight: bolder;
        }

        .content img {
            width: 30%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 20px;
            margin-top: 20px;
        }

        .about-section {
            background: url(img/bg2.jpg) no-repeat left;
            background-size: 67%;
            background-color: #f2f2f2;
            overflow: hidden;
            padding: 300px 0;
        }

        .inner-container {
            width: 60%;
            float: right;
            background-color: #f2f2f2;
            padding: 150px;
        }

        .text {
            font-size: 25px;
            font-family: 'monospace', 'Ubuntu', sans-serif;
            color: #545454;
            line-height: 30px;
            text-align: justify;
            margin-bottom: 40px;
        }

        .skills {
            display: flex;
            font-family: 'monospace', 'Ubuntu', sans-serif;
            justify-content: space-between;
            font-weight: 700;
            font-size: 13px;
        }

        @media screen and (max-width:1200px) {
            .inner-container {
                padding: 80px;
            }
        }

        @media screen and (max-width:1000px) {
            .about-section {
                background-size: 100%;
                padding: 100px 40px;
            }

            .inner-container {
                width: 100%;
            }
        }

        @media screen and (max-width:600px) {
            .about-section {
                padding: 0;
            }

            .inner-container {
                padding: 60px;
            }
        }

        #Guest ul {
            list-style-type: none;
            padding: 0;
        }

        .content {
            text-align: center;
            padding: 50px;
        }

        .join-box {
            border: 2px solid #4CAF50;
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .transparent-picture {
            width: 100%;
            border-radius: 10px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                class="w3-hover-opacity"></a></p>
    </div>
    <!-- Navigation bar -->
    <div class="navbar">
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">HOMEPAGE</a>
        <a href="#Ourclub" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">OUR CLUB</a>
        <a href="#Guest" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">GUEST</a>
        <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">JOIN US</a>
        <a href="login.php" class="right">SIGN IN</a>
    </div>

    <!-- Main content area -->
    <div class="content">
        <h1>WELCOME to SPARKLE RECREATION CLUB</h1>
        <p>Explore the world of outdoor adventures and recreation with our vibrant club. Whether you are a seasoned
            explorer or a newcomer, there's something for everyone!</p>
        <div class="gallery-container">
            <img src="w3images/hiking2_index.jpg" alt="Outdoor Adventure" />
            <img src="w3images/kayakking_events.jpg" alt="Outdoor Adventure" />
            <img src="w3images/trekking.jpg" alt="Outdoor Adventure" />
            <img src="w3images/bungee.jpg" alt="Outdoor Adventure" />
        </div>
        <p>Join us to discover exciting activities, build lasting friendships, and create memories that will last a
            lifetime.</p>
    </div>

    <!-- Our Club Section -->
    <div id="Ourclub" class="about-section">
        <div class="inner-container">
            <h1>Our Club</h1>
            <p class="text">
                Welcome to Sparkle Recreation Club, where outdoor enthusiasts unite for unforgettable adventures!
                Immerse yourself in thrilling hikes, refreshing swims, and cozy camping nights under the stars.
                Whether you're a seasoned explorer or a newcomer, our diverse activities cater to all. Join us in
                creating lasting memories, forging new friendships, and celebrating the joy of the great outdoors. Spark
                your passion for adventure with Sparkle Recreation Club - where every moment shines!
            </p>
        </div>
    </div>

    <!-- Guest -->
    <div id="Guest" class="content">
        <h1 class="section-heading">GUEST</h1>
    </div>

    <div class="join-box">
        <img src="img/community.jpg" alt="Transparent Picture" class="transparent-picture">
        <p>Join our club and receive many benefits! To all guests, what are you all waiting for?. Join us now and to
            get more details about our club. You may sign up first.</p>
        <button class="button" onclick="redirectSignUp()">Join Now</button>
    </div>

    <script>
        function redirectSignUp() {
            window.location.href = 'signup.php';
        }
    </script>

    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                class="w3-hover-opacity"></a></p>
    </div>

</body>
</html>
