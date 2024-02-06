<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $chosen_event = $_POST['chosen_event'];

        // Check if the submitted username and email match the logged-in user
        $conn = new mysqli("localhost","id21864099_src","Shamierul_862001","id21864099_sparkle");
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        $userCheckQuery = $conn->prepare("SELECT username, email FROM users WHERE user_id = ?");
        $userCheckQuery->bind_param("i", $user_id);
        $userCheckQuery->execute();
        $userCheckResult = $userCheckQuery->get_result();
        $userCheckRow = $userCheckResult->fetch_assoc();
        $userCheckQuery->close();

        if ($userCheckRow['username'] == $username && $userCheckRow['email'] == $email) {
            // User is allowed to submit an event for their own account
            $stmt = $conn->prepare("INSERT INTO events (user_id, username, email, chosen_event) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $user_id, $username, $email, $chosen_event);
            $stmt->execute();
            $stmt->close();

            echo '<script>
                alert("Your answer has been submitted, Admin will respond through E-mail!");
                setTimeout(function() {
                    window.location.href = "home.php#Events";
                }, 3000);
            </script>';
        } else {
            // User is trying to submit an event for a different account
            echo '<script>
                alert("You can only submit an event for your own account.");
            </script>';
        }

        $conn->close();
    } else {
        // User is not logged in
        echo '<script>
            alert("You need to log in to submit an event.");
        </script>';
    }
}
