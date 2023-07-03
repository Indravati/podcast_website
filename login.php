<!-- <?php
session_start();
include('db_connect.php');

$msg=false;
if(isset($_POST['user_name'])){
  $user_name=$_POST['user_name'];
$user_password =$_POST['user_password'];

$query="select * from user1 where user ='".$user_name."' AND password='".$user_password."' limit 1";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)==1) {
  header('Location:Podcast.php');
} else {
  $msg="Incorrect password";
}

}

?> -->

<!DOCTYPE html>
<html>
  <head>
    <title>BeVocal</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
  </head>
  <body>
    <!-- <div class="back"> -->
    <!-- <nav>
        <div class="logo">BE.VOCAL</div>
        <ul>
          <li><a href="podcast.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li class="btn-signup"><a href="sign_up.php">Sign-Up</a></li>
          <li class="btn-signin"><a href="login.php">Sign-In</a></li>
        </ul>
      </nav> -->
      <div class="container">
        <form class="form" method="POST">
          <h1 class="heading">login</h1>
          <input type="text" placeholder="name" name="user_name" autocomplete="off" class="name" required>
          <input type="password" placeholder="password" name="user_password" autocomplete="off" class="password" required>
          <input type="submit" class="submit-btn" >
          <a href="sign_up.php" class="link"
            >don't have an account? Register one</a
          >
</form>
      </div>
 <?php

echo('<h3>'.$msg.'</h3>');
?>
    <script src="login.js"></script>
    <!-- <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h3>About Us</h3>
          <p>
            We are passionate about sharing stories and ideas through the power of audio. Our goal is to inspire and inform our listeners and have an engaging conversations.
          </p>
        </div>
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="podcast.html">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="About.html">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <ul>
            <li>123 Main St.</li>
            <li>New World, NW 123456</li>
            <li>Phone: 100-000-0000</li>
            <li>Email: be@vocal.com</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </footer> -->
  </body>
</html>