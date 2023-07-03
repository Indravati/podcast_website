 <?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {
    // header('Location:podcast.php');
		$name = $_POST['name'];
    $email = $_POST['email'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo( name, email, message) VALUES ('$name','$email','$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contact.css">
    
</head>

<body>

    <header>
        <nav>
            <div class="logo">BE.VOCAL</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="logout.php" class="btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <h1>Contact Us</h1>
    <form action="" id="contact-form" method="post" class="form">
        <input type="text" class="name" id="name" name="name" placeholder="Name">
        <br>
        <input type="text" class="email" id="email" name="email" placeholder="Email">
        <br>
        <textarea name="message" id="message" cols="30" rows="5" class="message" placeholder="Message"></textarea>

        <br>
        <button type="submit" class="btn" name="post_comment">SEND</button>
    </form>

    <div class="content">
         <?php

			$sql = "SELECT * FROM demo ORDER BY ID DESC LIMIT 1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
       <h4><?php echo "Thank you for your feedback"?></h4>
        <h3><?php echo $row['name'];?></h3>
        <h4><?php echo "We will get back to you at"?></h4>
        <h3><?php echo $row['email']; ?></h3>

        <?php } } ?> 
    </div>
</body>

</html>
