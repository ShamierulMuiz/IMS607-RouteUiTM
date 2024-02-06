<?php
session_start();
include('dbcon.php');

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Fetch username from the database
    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($con, "SELECT username FROM users WHERE user_id = '$user_id'");
    $row = mysqli_fetch_array($query);

    if ($row) {
        $username = $row['username'];
        echo '<h2 style="text-align: center; color: #333;">Welcome, ' . $username . '!</h2>';
    } else {
        echo '<h2 style="text-align: center; color: #333;">Welcome!</h2>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <title>Welcome to SRC, UiTMCK</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body, h1, h2, h3, h4, h5 { font-family: "Poppins", sans-serif }
    body { font-size: 16px; }
    body {background-color: lightgrey;}
    .w3-half img { margin-bottom: -6px; margin-stop: 16px; opacity: 0.8; cursor: pointer }
    .w3-half img:hover { opacity: 1 }
    #movingTitle {
      font-family: "YourCustomFont", sans-serif;
      font-size: 3em;
      color: #333; 
    }
            .redirect-box {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #808080;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #000000;
        }
  </style>

  <script>
    window.onload = function () {
      var title = document.getElementById("movingTitle");
      var xPos = 0;
      var direction = 1;

      setInterval(function () {
        title.style.transform = "translateX(" + xPos + "px)";
        xPos += direction;

        if (xPos >= window.innerWidth - title.offsetWidth || xPos <= 0) {
          direction *= -1;
        }
      }, 10);
    };
  </script>
</head>

<nav class="w3-sidebar w3-grey w3-collapse w3-top w3-large w3-padding" style="z-index:9;width:300px;font-weight:bold;" id="mySidebar"><br>

  <div class="w3-container">
    <img src="w3images/srclogo.jpg" alt="SRC Logo" class="w3-round" style="width: 100px; height: 100px; margin-bottom: 1px;">
    <h3 class="w3-padding-53"><b>Sparkle<br>Recreation Club (SRC)</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href="#Services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
    <a href="#News" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">News</a>
    <a href="#Activities" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a>
    <a href="#Events" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Events</a>
    <a href="#Committee" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SRC Committee</a>
    <a href="#Getintouch" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Get in Touch</a>
    <a href="#Aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a>
  </div>
    <h4><a href="#" onclick="confirmLogout()" class="w3-bar-item w3-button w3-hover-black" style="background-color: rgba(0, 0, 0, 0.5); color: rgba(255, 255, 255, 0.8); font-weight: bold; font-size: 0.8em;">Log Out</a></h4>

    <script>
      function confirmLogout() {
      var confirmExit = confirm("Are you sure you want to Log out?");
      if (confirmExit) {
      window.location.href = "index.php"; 
      }
    }
</script>
  </div>

</nav>


<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>SRC, UiTMCK</span>
</header>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:340px;margin-right:100px">

  <div class="w3-container" style="margin-top:80px" id="About us">
 <title>Welcome to Sparkle Recreation Club, UiTMCK</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body, h1, h2, h3, h4, h5 {
      font-family: "Poppins", sans-serif;
    }

    body {
      font-size: 16px;
    }

    .w3-half img {
      margin-bottom: -6px;
      margin-top: 16px;
      opacity: 0.8;
      cursor: pointer;
    }

    .w3-half img:hover {
      opacity: 1;
    }

    
    h1 {
      font-family: 'Poppins', sans-serif;
      font-size: 3em;
      text-shadow: 4px 3px 2px #6082B6;
    }

  </style><h1 class="w3-jumbo"id="movingTitle"><b>WELCOME TO SRC</b></h1>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .homepage-container {
      position: relative;
    }

    .homepage-image {
      width: 100%;
      height: auto;
      display: block;
    }

    .quote-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border-radius: 30px;
      text-align: ju;
    }

    .quote-text {
      font-family: 'Special Elite', cursive;
      font-size: 30px;
      font-weight: bolder;
    }
  </style>
  <div class="homepage-container">
  <img src="img/SRC_login.jpg" alt="Homepage" class="homepage-image">
  <div class="quote-box">
    <p class="quote-text">"Staying active keeps us motivated and alive. Embrace the adventure!"</p>
  </div>
</div>
  </div>

<!--Services start-->

<div class="w3-container" id="Services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Services</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
<style>
    .service-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border-radius: 5px;
      margin: 10px;
    }
   .title {
      font-family: 'Special Elite', cursive;
      font-size: 24px;
      color: #FFFFFF;
      background: linear-gradient(to right, #000, #444); 
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .container {
      display: table;
      width: 100%;
    }
    h2{
      font-weight: bolder;
      text-align: center;
    }
    .service-box {
      display: table-cell;
      text-align: justify;
      vertical-align: top;
      padding: 20px;
      border-radius: 5px;
      margin: 10px;
      background-color: #FFECB3; 
    }
   .service-box:nth-child(2) {
      background-color: #BBDEFB; 
    }

     .service-image {
      width: 250px;
      height: 200px;
      margin-bottom: 10px;
      border-radius: 70%;
      display: block;
      margin: 0 auto; 
      opacity: 1;
      transition: opacity 0.3s ease-in-out;
    }

    .service-image:hover {
      opacity: 0.7;
    }
</style>
<div class="container">
  <div class="container">
  <div class="service-box">
    <img src="w3images/hiking.jpg" alt="Events Participation" class="service-image">
    <h2>Unleash Your Inner Adventurer - Join Our Events!</h2>
    <p>Experience the thrill of a challenging hike, compete in friendly sports tournaments, unwind under the stars while camping, or connect with fellow members at social gatherings.</p>
    <p>Our diverse event calendar offers something for everyone, from adrenaline junkies to social butterflies. Whether you're looking to stay active, explore new landscapes, or simply make new friends, our events are the perfect way to get involved and have a blast.</p>
  </div>
  <div class="service-box">
    <img src="w3images/engagement.png" alt="Community Engagement" class="service-image">
    <h2>Community Engagement - Strive Yourself with Other Peoples</h2>
    <p>Hone your skills and expand your knowledge with our engaging workshops and educational activities. We offer a variety of workshops covering diverse topics, from art and music to fitness and technology.</p>
    <p>Our educational activities provide opportunities to learn from experts, explore new interests, and discover hidden talents. Help to discover how you will treat yourself to the real-world situation.</p>
  </div>
  <div class="service-box">
    <img src="w3images/skill.png" alt="Social Events & Community" class="service-image">
    <h2>Skill Development Program - Learn from the Master!</h2>
    <p>Offering workshops, training sessions, or classes to help members enhance their skills in specific recreational activities, like swimming lessons, fitness classes, or outdoor adventure training.</p>
    <p>Our vibrant community welcomes everyone with open arms, making it the perfect place to find support, encouragement, and a sense of belonging.</p>
  </div>
</div>
</div>

<!--Services end-->

<!--News start-->
<div class="w3-container" id=News style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>News</b></h1>
  <hr style="width:50px;border:5px solid black" class="w3-round">

    <style>
        .announcement-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            grid-template-rows: auto auto; 
            gap: 20px; 
        }
        .announcement-box {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px;
        }

        .announcement-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        h2 {
            color: #4CAF50;
        }

        p {
            font-size: 18px;
        }

    </style>
<div class="announcement-container">

  <div class="announcement-box">
    <img src="img/facility.jpg" alt="Announcement Image" class="announcement-image">
    <h2>Exciting New Facilities Coming to Sparkle Recreation Club!</h2>
    <p style="text-align:justify;">Dear Sparkle Recreation Club Members,

    We are thrilled to announce that in response to your feedback and suggestions, we are expanding our facilities to bring you an even more enriching recreational experience! Get ready for state-of-the-art fitness equipment, a rejuvenating spa, and a dedicated area for group activities. We can't wait for you to enjoy these new offerings and elevate your Sparkle Recreation Club experience.</p>
  </div>

  <div class="announcement-box">
    <img src="img/event.jpg" alt="Announcement Image" class="announcement-image">
    <h2>Exclusive Member-Only Events and Discounts</h2>
    <p style="text-align:justify;">At Sparkle Recreation Club, we believe in making your membership truly special. That's why we are introducing a series of exclusive member-only events throughout the year. From themed parties to wellness workshops, these events are designed to enhance your sense of community and well-being. Additionally, be on the lookout for special discounts at our club's restaurant, spa, and other amenities as a token of our appreciation for your continued support.</p>
  </div>

  <div class="announcement-box">
    <img src="img/pool.jpg" alt="Announcement Image" class="announcement-image">
    <h2>Swimming pool temporarily closed!</h2>
    <p style="text-align:justify;">We regret to inform you that, due to essential maintenance and upgrades, the swimming pool will be temporarily closed for a period of two weeks starting [specific date]. While we understand the inconvenience this may cause, please rest assured that this closure is necessary to ensure the pool's long-term functionality and safety. We appreciate your understanding and patience during this maintenance period, and we look forward to welcoming you back to a refreshed and improved swimming experience.</p>
  </div>

  <div class="announcement-box">
    <img src="img/safety.jpg" alt="Announcement Image" class="announcement-image">
    <h2>Safety Priority Announcement: Ensuring Your Well-being
    </h2>
    <p style="text-align:justify;">In light of a recent unfortunate incident involving an injury during club activities, we want to emphasize our unwavering commitment to your safety. The well-being of our members is our top priority, and we are taking immediate steps to review and enhance our safety protocols.We encourage all members to adhere to posted guidelines, utilize provided safety equipment, and promptly report any hazards to our staff. Your safety is paramount, and we appreciate your cooperation in creating a secure environment for everyone at Sparkle Recreation Club.</p>
  </div>
</div>


<!--Activity start-->
<div class="w3-container" id=Activities style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>Activities</b></h1>
  <hr style="width:50px;border:5px solid black" class="w3-round">

   <!-- Photo grid (modal) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "montserrat", sans-serif;
            box-sizing: border-box;
        }

        .gallery-section {
            width: 100%;
            height: 100%;
            padding: 60px 0;
            background: #f1f1f1;
        }

        .inner-width {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .gallery-section h1 {
            text-align: center;
            text-transform: uppercase;
            color: #333;
        }

        .border {
            width: 180px;
            height: 4px;
            background: #333;
            margin: 60px auto;
        }

        .gallery-section .gallery {
            display: flex;
            flex-wrap: wrap-reverse;
            justify-content: center;
        }

        .gallery-section .image {
            flex: 25%;
            overflow: hidden;
            cursor: pointer;
            height: 200px; 
        }

        .gallery-section .image img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: 0.4s;
        }

        .gallery-section .image:hover img {
            transform: scale(1.4) rotate(15deg);
        }

        @media screen and (max-width:960px) {
            .gallery-section .image {
                flex: 33.33%;
            }
        }

        @media screen and (max-width:768px) {
            .gallery-section .image {
                flex: 50%;
            }
        }

        @media screen and (max-width:480px) {
            .gallery-section .image {
                flex: 100%;
            }
        }
</style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
 <div class="gallery-section">
        <div class="inner-width">
            <h1>Activities Gallery</h1>
            <div class="border"></div>
            <div class="gallery">

                <a href="img/act1.jpg" class="image">
                    <img src="img/act1.jpg" alt="">
                </a>

                <a href="img/act2.jpg" class="image">
                    <img src="img/act2.jpg" alt="">
                </a>

                <a href="img/act3.jpg" class="image">
                    <img src="img/act3.jpg" alt="">
                </a>

                <a href="img/act4.jpg" class="image">
                    <img src="img/act4.jpg" alt="">
                </a>

                <a href="img/act5.jpg" class="image">
                    <img src="img/act5.jpg" alt="">
                </a>

                <a href="img/act6.jpg" class="image">
                    <img src="img/act6.jpg" alt="">
                </a>

                <a href="img/act7.jpg" class="image">
                    <img src="img/act7.jpg" alt="">
                </a>

                <a href="img/act8.jpg" class="image">
                    <img src="img/act8.jpg" alt="">  
                </a>
            </div>
        </div>
    </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".gallery").magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
<!--Activity end-->

  <!-- Events -->

<div class="w3-container" id="Events" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>EVENT ANNOUNCEMENT</b></h1>
  <hr style="width:50px;border:5px solid black" class="w3-round">

  <h2 class="w3-xlarge">Past Events</h2>
  <ul class="w3-ul w3-border w3-margin-top">
    <li class="w3-padding">
      <img src="w3images/camping.jpg" alt="Camping Weekend" style="width: 400px; border: 3px solid #ccc; margin-right: 10px;">
      Camping Weekend - January 6 2024
    </li>
  </ul>

  <h2 class="w3-xlarge">
    <span class="new-badge small"><b>Upcoming Events!!!</b></span>
  </h2>

  <style>

    .new-badge {
      font-size: 20px; 
      color: #f00; 
      animation: shimmer 2s ease-in-out infinite;
    }

    @keyframes shimmer {
      3% { opacity: 3; }
      20% { opacity: 0.5; }
      100% { opacity: 20; }
    }
  </style>

  <ul class="w3-ul w3-border w3-margin-top">
    <li class="w3-padding">
      <img src="w3images/hiking_events.jpg" alt="Hiking Expedition" style="width: 400px; border: 3px solid #ccc; margin-right: 10px;">
      Hiking Expedition - February 2 2024
    </li>
    <li class="w3-padding">
      <img src="w3images/kayakking_events.jpg" alt="Kayaking Adventure" style="width: 400px; border: 3px solid #ccc; margin-right: 10px;">
      Kayaking Adventure - Mac 26 2024
    </li>
  </ul>

  <p>Interested in joining us? Apply yourself now as it is limited!!!</p>
    <form action="events_registration.php" method="post">
      <button type="submit">Click to redirect for event registration form</button>
    </form>
</div>

<!--end Events-->

<!--commitee start-->

  <div class="w3-container" id="Committee" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>Our Committee</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
<div class="committee-box">

<div style="text-align: center; font-family: 'Courier New', monospace; font-size: 18px; color: #000;">

  <div style="padding: 10px; margin: 20px 0; text-align: justify; font-weight: bold;">
    Welcome to the Sparkle Recreation Club, where we thrive on the spirit of adventure and recreation. Our committee is passionately dedicated to organizing a variety of recreational activities, fostering a community of enthusiasts who share a love for the great outdoors. Whether it's the thrill of hiking through scenic trails, the refreshing splash of swimming in crystal-clear waters, or the camaraderie forged during exciting events, we believe in creating memorable experiences that resonate with the joy of shared activities. Join us on a journey of fun, laughter, and the pursuit of recreation that goes beyond boundaries.</div>
  </div>
<button onclick="redirectToCommittee()">View Committee Members</button>

<script>
function redirectToCommittee() {
  window.location.href = 'committee.php';
}
</script>
<!--committee end-->

<!--get in touch-->


<div class="w3-container" id="Getintouch" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>Get in Touch</b></h1>
  <hr style="width:50px;border:5px solid black" class="w3-round">

<div class="feedback-container">
    <p>Attention members of the SRC Club! Your input is invaluable to us as we strive for continuous improvement. If you have any thoughts, suggestions, or requirements regarding yourself or ways to enhance the club, we encourage you to share your message with us below.</p>

    <img src="img/getintouch.jpg" alt="Get in Touch Image" style="max-width: 50%; height: 50%; border-radius: 10px;">
</div>
    <form action="feedback.php" method="post">
      <button type="submit">Click to redirect for feedback page</button>
    </form>
<!--get in touch end-->


<!--About us start-->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    .vision-box, .mission-box {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: left;
    }

    .vision-box {
      background-color: #007bff; 
      color: #fff; 
    }

    .mission-box {
      background-color: #ff4c4c; 
      color: #fff; 
    }

    h2 {
      margin-bottom: 10px;
      color: black;
    }
  </style>
<div class="w3-container about-container" id="Aboutus" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-grey"><b>About Us</b></h1>
  <hr style="width:50px;border:5px solid black" class="w3-round">

  <h1>Who We Are</h1>
 <p>We are a community of enthusiastic individuals united by the love for recreation and adventure. Our club is dedicated to providing exciting and memorable experiences for our members, fostering a sense of community and camaraderie.</p>

    <p>At Sparkle Recreation Club, we organize a variety of recreational activities, including thrilling hikes, sports tournaments, camping adventures, and engaging workshops. Whether you're an adrenaline junkie or someone looking to unwind and connect with like-minded individuals, our club has something for everyone.</p>

    <p>Join us on a journey of exploration, friendship, and the joy of shared activities. Discover the beauty of the great outdoors, enhance your skills, and make lasting memories with Sparkle Recreation Club.</p>
<div class="vision-box">
  <h2>Vision</h2>
  <p>We envision a world where everyone has the opportunity to experience the joy of outdoor recreation, connect with nature, and forge lasting friendships through shared adventures.</p>
</div>

<div class="mission-box">
  <h2>Mission</h2>
  <p>Our mission is to provide accessible and engaging outdoor experiences that promote physical and mental wellbeing, build environmental awareness, and foster a strong sense of community among our members.</p>
</div>
</div>

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <p class="w3-right">
        Developer contact:

        <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a>

        <a href="https://www.instagram.com/shamierul_muiz?igsh=MXhjbmh6ZnQ5d2FveQ==" target="_blank">
            <img src="img/instagram_logo.png" alt="Instagram Logo" style="max-width: 30px; height: auto;">
        </a>
                <a href="https://www.facebook.com/shamirul.muizii?mibextid=9R9pXO" target="_blank">
            <img src="img/facebook_logo.png" alt="Facebook Logo" style="max-width: 30px; height: auto;">
        </a>
        <br>
        Email: <a href="mailto:2022844914@student.uitm.edu.my">2022844914@student.uitm.edu.my</a>
    </p>
</div>
</body>
</html>
