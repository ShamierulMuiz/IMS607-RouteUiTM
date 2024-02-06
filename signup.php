<?php
session_start();
include('dbcon.php');

$message = '';

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $message = 'Error: Password and Confirm Password do not match';
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($con, $query);

        if ($result) {
            $message = 'Registration successful.';
        } else {
            $message = 'Error in registration. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Form</title>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <style>
body {
  background: #455A64;
  background: -webkit-linear-gradient(to top, #455A64, #607D8B);
  background: -moz-linear-gradient(to top, #455A64, #607D8B);
  background: -o-linear-gradient(to top, #455A64, #607D8B);
  background: linear-gradient(to top, #455A64, #607D8B);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 500;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}

.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: rgba(0, 0, 0, 0.18);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email,
input.text.w3lpass {
  margin: 2em 0;
}

.text:focus,
.text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder,
.text:valid::-webkit-input-placeholder {
  color: 607D8B;
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

:-moz-placeholder {
  color: #fff;
}



input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #607D8B;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #607D8B;
}

.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #607D8B;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}


.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}



}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

}

 .registration-message-container {
            text-align: center;
            margin-top: 9px;
            padding: 5px;
            border-radius: 5px;
        }

        .registration-success {
            background-color: #50C878; /* Soft green color */
            color: #fff;
        }

        .registration-error {
            background-color: #f44336;
            color: #fff;
        }

.terms-link {
  color: #E97451;
}

    </style>
</head>
<body>
    <div class="main-w3layouts wrapper">
        <h1>Sign Up Now</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required="">
                    <div class="wthree-text">

      <label class="anim">
        <input type="checkbox" class="checkbox" required="">
        <span>I Agree To The Terms & Conditions</span>
      </label>
      <a href="t_c.php" class="terms-link">[Terms & Conditions]</a>
      <div class="clear"></div>
   </div>
    <input type="submit" value="SIGNUP" name="signup">
  </form>

   <script>
                    function redirectToTerms() {
                        var checkbox = document.querySelector('.checkbox');
                        if (checkbox.checked) {
                            window.location.href = 't_c.php';
                            return false;
                        }
                        return true;
                    }
                </script>
                <p>Already have an account? <a href="login.php" style="color: red;">Login Now!</a></p>
                <div class="registration-message-container <?php echo $result ? 'registration-success' : 'registration-error'; ?>">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
