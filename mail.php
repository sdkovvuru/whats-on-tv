<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'header.php';?>
<div class="header">
  <img src="logo.jpg">
  <div class="header-right">
    <a href="/whats-on-tv/index.php">Home</a>
	<a href="/whats-on-tv/movies.php">Movies</a>
	<a href="/whats-on-tv/shows.php">Shows</a>
    <a href="/whats-on-tv/music.php">Music</a>
	 <a class="active" href="/whats-on-tv/contact.php">Contact Us</a>
    <a href="#about">About</a>
  </div>
</div>
</br>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "YOUREMAIL@HERE.COM";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='/whats-on-tv/index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
</br>
<?php include 'footer.php';?>

</body>
</html>