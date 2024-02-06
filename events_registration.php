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

input,
textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: 'Consolas', monospace;
}

textarea {
    resize: none;
    margin-top: 10px;
    font-size: 18px;
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


  .close-button {
    cursor: pointer;
  }

</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&family=Open+Sans:wght@400;700&display=swap">

<div class="w3-container" id="EventsPage">
      <form action="events_connect.php" method="post" onsubmit="return showNotification()">

  <h1><b>Events Registration Form</b></h1>
  <hr style="width:50px;border:5px solid #4CAF50" class="w3-round">

  <div class="feedback-container">
<form action="events_connect.php" method="post">
    <div class="w3-section">
        <label>Username</label>
        <input class="w3-input w3-border" type="text" name="username" required>
    </div>
    <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
    </div>
<div class="w3-section">
    <label>Choose events</label>
    <select class="w3-select w3-border" name="chosen_event" required style="font-size: 18px;">
        <option value="" disabled selected>Select an event</option>
        <option value="hiking">Hiking</option>
        <option value="kayaking">Kayaking</option>
    </select>
</div>


    <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">Send</button>
</form>

    <div class="notification" id="notification">
      Your answer has been submitted, Admin will response through E-mail!
      <span class="close-button" onclick="hideNotification()">✖</span>
    </div>
  </div>

  <script>
    function showNotification() {
      var notification = document.getElementById('notification');
      notification.style.display = 'block';
      setTimeout(function () {
        hideNotification();

        window.location.href = 'home.php#Events';
      }, 3000);
      return true;
    }

    function hideNotification() {
      var notification = document.getElementById('notification');
      notification.style.display = 'none';
    }
  </script>
</div>

