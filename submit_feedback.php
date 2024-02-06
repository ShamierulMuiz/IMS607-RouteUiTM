<?php
include("home.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = mysqli_real_escape_string($conn, $_POST['message_feedback']);

    $query = "INSERT INTO messages (message) VALUES ('$message')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Your message has been successfully submitted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
