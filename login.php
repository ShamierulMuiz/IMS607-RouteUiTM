<?php
session_start();
include('dbcon.php'); 

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    
    $query = mysqli_query($con, "SELECT * FROM users WHERE password='$password' AND username='$username'");
    $row = mysqli_fetch_array($query);
    
    if ($row) {
        $_SESSION['user_id'] = $row['user_id'];
        header('location: home.php');
        exit; // Ensure no further code execution after redirection
    } else {
        $error_message = 'Invalid Username and Password Combination!!';
    }
}
?>

<html>
<head>
</head>
<body>
    <div class="form-wrapper">
        <div class="button-panel">
                <link rel="stylesheet" type="text/css" href="style.css">
            <a href="index.php" style="font-weight: bolder;font-family: sans-serif;" class="back-button">&lt; Back to Guest Page</a>
        </div>

        <form action="#" method="post">
            <h3>Login Here</h3>
            <div class="form-item">
                <input type="text" name="user" required="required" placeholder="Username" autofocus required>
            </div>
            <div class="form-item">
                <input type="password" name="pass" required="required" placeholder="Password" required>
            </div>
            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login">
            </div>
        </form>

        <?php
            if (isset($error_message)) {
                echo '<p style="color: white;">' . $error_message . '</p>';
            }
        ?>

        <div class="reminder">
            <p>Not a member? <a href="signup.php">Sign up now</a></p>
            <h1 style="font-size: 15px;">
                <a href="adminlogin.php" style="background-color: darkgrey; color: white; padding: 5px 10px; text-decoration: none; border-radius: 5px;">Administrator log in</a>
            </h1>
        </div>
    </div>
</body>
</html>
