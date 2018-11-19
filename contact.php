<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Watch and enjoy your Favorite, Top Movies. Explore the best music by Bollywood. Don't miss the old and new Hindi/English blockbuster movies on TV." />
<title> Give us your feebdack on what new additions you want to see.</title>
</head>
<body>

<?php include 'header.php';?>
<div class="header">
  <img src="logo.jpg">
  <div class="header-right">
    <a  href="/whats-on-tv/index.php">Home</a>
	<a href="/whats-on-tv/movies.php">Movies</a>
	<a href="/whats-on-tv/shows.php">Shows</a>
    <a href="/whats-on-tv/music.php">Music</a>
	 <a class="active" href="/whats-on-tv/contact.php">Contact Us</a>
    <a href="#about">About</a>
  </div>
</div>
<form action="mail.php" method="POST">
<div style="align:centre;font-size:10;color:black;padding-left:12px;width:500px">
</br>
<label class="required">Name   </label> <input type="text" name="name"> </br></br>
<label class="required">Email  </label> <input type="text" name="email"> </br></br>
<label class="required">Phone</label> <input type="text" name="phone">

<br />


<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input class="button" type="submit" value="Send"> <input class="button" type="reset" value="Clear">
<br />
</div>
<br />
</form>

<?php include 'footer.php';?>

</body>
</html>