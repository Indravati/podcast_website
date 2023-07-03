<?php
session_start();

include('db_connect.php');


$msg = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$user_name =$_POST['user_name'];
$user_email =$_POST['user_email'];
$user_password =$_POST['user_password'];
$user_re_password=$_POST['user_re_password'];
}

if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
header("Location: login.php");

if($user_password === $user_re_password) {
$query="insert into user1 (user, email, password) VALUES ('$user_name','$user_email','$user_password')";
mysqli_query($conn, $query);
echo('Database successfully Connected');
}
else{
  $msg="Password Not Match";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="sign_up.css">

</head>

<body>
    <!-- 
    <div class="alert-box">
        <p class="alert"></p>
    </div> -->
    <!-- <nav>
        <div class="logo">BE.VOCAL</div>
        <ul>
          <li><a href="Podcast.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="btn-signup"><a href="sign_up.php">Sign-Up</a></li>
          <li class="btn-signin"><a href="login.php">Sign-In</a></li>
        </ul>
      </nav> -->
    <div class="container">
        <form class="form" method="POST">
            <h1 class="heading">Register</h1>
            <input type="text" placeholder="name" name="user_name" autocomplete="off" class="name" required>
            <input type="email" placeholder="email" name="user_email" autocomplete="off" class="email" required>
            <input type="password" placeholder="password" name="user_password" autocomplete="off" class="password"
                required>
            <input type="password" placeholder="re-enter password" name="user_re_password" autocomplete="off"
                class="password" required>
            <input type="submit" class="submit-btn">
            <a href="login.php" value="SignUp" class="link">already have an account ? log in here</a>
        </form>
    </div>

    <?php
        echo('<h3>'.$msg.'</h3>');
        ?>
    <script src="sign_up.js"></script>

</body>

</html>