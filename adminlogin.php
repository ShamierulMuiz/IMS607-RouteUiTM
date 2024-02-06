<?php
session_start();
include('dbcon.php'); 

if (isset($_POST['login'])) {
    $admin_username = mysqli_real_escape_string($con, $_POST['admin']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    
    // Use prepared statement to prevent SQL injection
    $query = mysqli_prepare($con, "SELECT admin_id FROM admin WHERE admin_username=? AND password=?");
    mysqli_stmt_bind_param($query, "ss", $admin_username, $password);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);

    $num_row = mysqli_stmt_num_rows($query);

    if ($num_row > 0) {            
        mysqli_stmt_bind_result($query, $admin_id);
        mysqli_stmt_fetch($query);
        $_SESSION['admin_id'] = $admin_id;
        header('location: admin_dashboard.php');
        exit();
    } else {
        echo 'Invalid Admin Username and Password Combination';
    }

    mysqli_stmt_close($query);
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="button-panel">
            <a href="index.php" class="back-button">&lt; Back to Guest Page</a>
        </div>

        <form action="#" method="post">
            <h3>Admin Login</h3>
    
            <div class="form-item">
                <input type="text" name="admin" required="required" placeholder="Admin Username" autofocus required>
            </div>
    
            <div class="form-item">
                <input type="password" name="pass" required="required" placeholder="Password" required>
            </div>
    
            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
