<html>
<head>
<title>Activity1</title>
<style>
*{
	font-family: Helvetica;
}
body {
	margin-left: 150px;
	margin-right: 150px;
	font-size: 1.10em;
	font-family: Helvetica;
	background-color: #121212;
	color: white;
	text-align: center;
	background-image: url('https://wallpapercave.com/wp/wp5576559.jpg');
}

h2 {
	color: #c21a09;
}

table{
	border-collapse: collapse;
	width: 100%;
	text-align: center;
	background-color: black;
}


.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 20px;
  font-family: Helvetica;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-top: 10px;

}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px; 
  font-family: 'Helvetica';  
  border: none;
  outline: none;
  color: white;
  padding: 15px 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  background: grey;
  
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: #BB86FC;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #3700B3;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>
<div class="navbar">

  <div class="dropdown">
    <a href = "../Landingpage.php" class="dropbtn">Back to Homepage </a>
    
  </div> 
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="FinActivity1.php" class="dropbtn">Go Back to Finals Activity 1</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MidActivity2.php" class="dropbtn">Go to Midterm Activity 2</a>   
</div>
<br>

<table border="2">
	<tr>
		<td><strong>Name:</strong></td>
		<td>CALUGTONG, CHARLES E.</td>
		<td><strong>Topic:</strong></td>
		<td>Chapter 1 Introduction to PHP</td>
	</tr>
	<tr>
		<td><strong>Activity No.</strong></td>
		<td>ACTIVITY 1</td>
		<td><strong>Date:</strong></td>
		<td>JUNE 15,2023</td>
	</tr>
</table>
<h2>Problem 1</h2>
<?php
$Days= array(
	"Sunday",
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday",
	"Saturday"
	);

echo "<h4>The days of the week in English are: </h4>";
echo "<p>$Days[0], $Days[1], $Days[2], $Days[3], $Days[4], $Days[5], $Days[6], </p>";

$Days= array(
	"Dimanche",
	"Lundi",
	"Mardi",
	"Mercredi",
	"Jeudi",
	"Vendredi",
	"Samedi"
	);
	
echo "<br><h4>The days of the week in French are: </h4>";
echo "<p>$Days[0], $Days[1], $Days[2], $Days[3], $Days[4], $Days[5], $Days[6], </p>";
?>
<BR>
<h2>Problem 2</h2>
<?php 
$Number	= 55.8691; 

echo "<p><b>Original Number:</b> $Number</p>";
echo "<p><b>Round Number:</b> ", round($Number), "</p>";
echo "<p><b>Ceil Number:</b> ", ceil($Number), "</p>";
echo "<p><b>Floor Number:</b> ", floor($Number), "</p>";

?>

<BR>
<h2>Problem 3</h2>
<?php 
$Number = 56; 

if(is_numeric($Number)) { 
	$num = round($Number);
	echo "<p><b>Number:</b> $Number</p>";
	($Number % 2 == 0) ? 
	$Result = "The number $num is <b>even.</b>" : 
	$Result = "The number $num is <b>odd.</b>" ;  
}else{
	$Result = "The Value is not a Numeric." ;
}

echo "<p>$Result</p>"
?>
</div>
</body>
</html>