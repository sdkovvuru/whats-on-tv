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


.button {
    border-radius: 4px;
	background-color: #00b050;
	border-width: 3px;
	border-style: solid;
    color:  black;
    padding: 10px 20px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
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

.banner ul {
padding: 5px 5px 5px;
}

.banner li{
	border: 1px solid #00b050;
    border-radius: 4px;
	border-width: 5px;
    padding: 5px 5px 5px;
    width: 90%;
	margin: 0 0 3px 0;
}

 .banner p {
  font-family: "Gentium Basic";
  font-size: 17px;
  text-align: center;
  color: #00b050;
 }
.banner img {
  float: left; 
    margin: 5px;
	margin-right:1rem;
 }
 
 
 .banner a {
	 font-family: "Gentium Basic";
  font-size: 17px;
  text-align: center;
  color: #00b050;
 }

#Position {
    background-color:#fff;
	border-color: #00b050;
	font-size: 18px;
	color: red;
    border:1px solid;    
    border-radius:100%;
    padding:16px 20px 16px;
	display:inline-block;
	float: right;
	border-width:5px;
}

#SongName {
	font-size: 14px;
	color: #00b050;
    padding:5px 5px 5px;
}



.header a:hover {
  background-color: #ddd;
  color: black;
}


.header a.active {
  background-color: white;
  color: black;
}

.required label.after { 
	content:"*";
	color: red;
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
';
?>


