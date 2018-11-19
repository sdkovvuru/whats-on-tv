<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79127606-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-79127606-2');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Watch and enjoy your Favorite, Top Movies. Explore the best music by Bollywood. Don't miss the old and new Hindi/English blockbuster movies on TV." />
<title>what's on Television this week? </title>
</head>
<body bgcolor="#E6E6FA">

<?php include 'header.php';?>
<div class="header">
  <img src="logo.jpg">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
	<a href="movies.php">Movies</a>
	<a href="shows.php">Shows</a>
    <a href="music.php">Music</a>
	 <a href="contact.php">Contact Us</a>
    <a href="about.php">About</a>
  </div>
</div>
<div style="padding:20px 20px 20px;">
</br>
  <h2 align="center">Let us bring you upto Speed on interesting things on TV this week!</h2>
<?php include 'grid.php';?>
<p align="center">Did you miss the Top 50 Bollywood songs on Zoom this Saturday? Check out our Music section for Latest hits.</p>

<p align="center">Do you wonder what awesome bollywood and Hollywood movies you are missing on Zee Cinema, Star Gold, HBO, Comedy Central or Star Movies? Here is a curated list from us.</p>
</br>


<div class="container" >
    <div class="row" >
	
        <div class="col-sm-3">
<div class="card mb-3 border border-success" >
  <h5 class="card-header">Featured in Movies</h5>
  <img class="card-img-top" src="images/dunkirk.jpg" alt="Card image cap" height="300">
  <div class="card-body">
    <h5 class="card-title">Dunkirk</h5>
    <p class="card-text">Star Movies</p>
	<p class="card-text">10PM 17/11/2018</p>
    <a href="movies.php" class="btn btn-success">View All</a>
  </div>
</div>
</div>

  <div class="col-sm-3">
<div class="card mb-3 border border-success" >
  <h5 class="card-header">Featured in Music</h5>
  <img class="card-img-top" src="images/zoomtop50.jpg" alt="Card image cap" height="300">
  <div class="card-body">
    <h5 class="card-title">Zoom Top 50</h5>
    <p class="card-text">Zoom</p>
	<p class="card-text">9AM Every Saturday</p>
    <a href="music.php" class="btn btn-success">View All</a>
  </div>
</div>
</div>

  <div class="col-sm-3">
<div class="card mb-3 border border-success">
  <h5 class="card-header">Featured in Movies</h5>
  <img class="card-img-top" src="images/bahubali.jpg" alt="Card image cap" height="300">
  <div class="card-body">
    <h5 class="card-title">Bahubali 2</h5>
    <p class="card-text">SET Max</p>
	<p class="card-text">9PM 18/11/2018</p>
    <a href="movies.php" class="btn btn-success">View All</a>
  </div>
</div>
</div>



<div class="col-sm-3">
<div class="card mb-3 border border-success">
  <h5 class="card-header">Featured in Movies</h5>
  <img class="card-img-top" src="images/chinababu.jpg" alt="Card image cap" height="300">
  <div class="card-body">
    <h5 class="card-title">Chinababu</h5>
    <p class="card-text">Zee Telugu</p>
	<p class="card-text">6PM 18/11/2018</p>
    <a href="movies.php" class="btn btn-success">View All</a>
  </div>
</div>
</div>

  <div class="col-sm-3">
<div class="card mb-3 border border-success">
  <h5 class="card-header">Featured in Music</h5>
  <img class="card-img-top" src="images/genius.jpg" alt="Card image cap" height="300">
  <div class="card-body">
    <h5 class="card-title">Genius</h5>
    <p class="card-text">Zee Cinemas</p>
	<p class="card-text">9PM 18/11/2018</p>
    <a href="movies.php" class="btn btn-success">View All</a>
  </div>
</div>
</div>

  </div>
</div>
  
</div>

<?php include 'footer.php';?>

</body>
</html>
