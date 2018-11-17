<?php
echo '
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #00b050;
  padding: 5px 5px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 15px; 
  line-height: 20px;
  border-radius: 4px;
}

.header img {
   border: 1px solid #ddd;
    border-radius: 4px;
    padding: 2px;
    width: 150px;
	height: 40px;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}


.header a.active {
  background-color: white;
  color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
<div class="header">
  <img src="logo.jpg">
  <div class="header-right">
    <a class="active" href="#home">Home</a>
	<a href="/movies.php">Movies</a>
	<a href="/shows.php">Shows</a>
    <a href="/music.php">Music</a>
	 <a href="#contact">Contact Us</a>
    <a href="#about">About</a>
  </div>
</div>';
?>


