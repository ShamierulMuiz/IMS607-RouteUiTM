<style>
  body {
    background-color: #f2f2f2;
    font-family: 'Consolas', monospace;

  }

  .feedback-container {
    max-width: 600px;
    margin: 50px auto; 
    text-align: left;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  h1 {
    font-family: 'Pacifico', cursive; 
    font-size: 36px;
    text-align: center;
    color: #4CAF50; 
  }

  p {
    font-size: 18px;
    font-family: 'Consolas', monospace;
  }

  form {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
  }

  input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: 'Consolas', monospace;
  }

  textarea {
    width: 100%;
    resize: none;
    margin-top: 10px;
    padding: 10px;
    box-sizing: border-box;
    font-family: 'Consolas', monospace;
    font-size: 18px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
  }

  .notification {
    display: none;
    background-color: #4CAF50;
    color: #fff;
    padding: 15px;
    margin-top: 10px;
    border-radius: 5px;
  }

  .close-button {
    cursor: pointer;
  }
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&family=Open+Sans:wght@400;700&display=swap">

<div class="w3-container" id="FeedbackPage">
  <h1><b>Feedback Page</b></h1>
  <hr style="width:50px;border:5px solid #4CAF50" class="w3-round">

  <div class="feedback-container">
    <form action="connect.php" method="post" onsubmit="return showNotification()">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter your username...">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email...">

      <p>For members of the SRC Club only, if you have any requirements about yourself or improvement for the club, feel free to send us the message below.</p>

      <label for="message">Feedback:</label>
      <textarea name="message" id="message" rows="5" placeholder="Enter your message here..."></textarea>

      <button type="submit">Submit</button>
    </form>

    <div class="notification" id="notification">
      Your answer has been submitted!
      <span class="close-button" onclick="hideNotification()">✖</span>
    </div>
  </div>

  <script>
    function showNotification() {
      var notification = document.getElementById('notification');
      notification.style.display = 'block';
      setTimeout(function () {
        hideNotification();

        window.location.href = 'home.php#Getintouch';
      }, 3000);

      return true;
    }

    function hideNotification() {
      var notification = document.getElementById('notification');
      notification.style.display = 'none';
    }
  </script>
</div>

