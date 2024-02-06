<?php
require_once('dbcon.php');

// Function to fetch messages from the database
function getMessages() {
    global $con;
    $queryMessages = "SELECT * FROM messages";
    $resultMessages = mysqli_query($con, $queryMessages);
    return $resultMessages;
}

// Function to fetch events from the database
function getEvents() {
    global $con;
    $queryEvents = "SELECT * FROM events";
    $resultEvents = mysqli_query($con, $queryEvents);
    return $resultEvents;
}

// Function to fetch users from the database
function getUsers() {
    global $con;
    $queryUsers = "SELECT * FROM users";
    $resultUsers = mysqli_query($con, $queryUsers);
    return $resultUsers;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        h2 {
            font-family: 'YourSpecialFont', sans-serif;
            color: black;
        }

        h3 {
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .logout-box {
            background-color: #4CAF50;
            padding: 10px;
            border-radius: 4px;
            display: inline-block;
        }

        .logout-link {
            text-decoration: none;
            color: white;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
        }

        .message-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="logout-box">
        <p><a href="index.php" class="logout-link">Logout</a></p>
    </div>

    <h3>Welcome, Admin!</h3>

    <div class="container">
        <div class="row wt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Message/Requirement from Users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Username</td>
                                <td>Email</td>
                                <td>Message</td>
                            </tr>
                            <?php
                            $resultMessages = getMessages();
                            while ($row = mysqli_fetch_assoc($resultMessages)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Events Registration Section -->
    <?php
    $resultEvents = getEvents();
    ?>
    <div class="container">
        <div class="row wt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Events Registration</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Username</td>
                                <td>Email</td>
                                <td>Event</td>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultEvents)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['chosen_event']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Section -->
    <?php
    $resultUsers = getUsers();
    ?>
    <div class="container">
        <div class="row wt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">User Registration</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Username</td>
                                <td>Email</td>
                            </tr>
                            <?php
                            while ($userRow = mysqli_fetch_assoc($resultUsers)) {
                            ?>
                                <tr>
                                    <td><?php echo $userRow['username']; ?></td>
                                    <td><?php echo $userRow['email']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p>
    </div>
</body>
</html>
