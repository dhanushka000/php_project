<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

    // Prepare statement to get user data based on email
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($pass, $row['password'])) {
        // Set session variables if login is successful
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        
        header('Location: home.php');
        exit();
    } else {
        $message = 'Incorrect username or password';
    }
}
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sri Lanka </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login.php">
</head>
<body>
  <h1>fdsgd</h1>
  <div class="wrapper">
    <form id="loginForm" action="#">
      <h2>Login</h2>
      <div class="input-field">
        <input type="text" id="email" required>
        <label>email</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" required>
        <label>password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
     
      <button type="submit"  >Login <a href="#"></a></button>
      
      
      <div class="register">
        <p>Don't have an account? <a href="index.html">Register</a></p>
      </div>
    </form>
  </div>

  <script>
  
    document.getElementById('loginForm').addEventListener('submit', function(event) {
   
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

    
      var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault(); 
        return;
      }


      if (password.length === 0) {
        alert("Please enter your password.");
        event.preventDefault(); 
        return;
      }

     
      var remember = document.getElementById('remember').checked;
      if (remember) {
        console.log("Remember me checked");
        
      }
    });
  </script>
   <?php include 'components/alert.php'; ?>
</body>
</html>
