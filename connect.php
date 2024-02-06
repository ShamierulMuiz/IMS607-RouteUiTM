<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $conn = new mysqli ("localhost","id21864099_src","Shamierul_862001","id21864099_sparkle");;
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
            $stmt = $conn->prepare("INSERT INTO messages (user_id, username, email, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $user_id, $username, $email, $message);
            $stmt->execute();
            $stmt->close();

            echo '<script>
                alert("Message submitted.");
                setTimeout(function() {
                    window.location.href = "home.php#Getintouch";
                }, 3000);
            </script>';
        } else {
            echo '<script>
                alert("You can only submit feedback for your own account.");
            </script>';
        }

        $conn->close();
    } else {
        echo '<script>
            alert("You need to log in to submit feedback.");
        </script>';
    }
}
?>
