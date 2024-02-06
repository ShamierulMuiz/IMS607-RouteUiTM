<?php
// Include your database connection file here
include("home.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the message from the form
    $message = mysqli_real_escape_string($conn, $_POST['message_feedback']);

    // Insert the message into the database
    $query = "INSERT INTO messages (message) VALUES ('$message')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Success! You can redirect the user or display a success message.
        echo "Your message has been successfully submitted!";
    } else {
        // Handle the error if the insertion fails
        echo "Error: " . mysqli_error($conn);
    }
}
?>
