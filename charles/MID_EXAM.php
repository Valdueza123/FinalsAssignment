<!DOCTYPE HTML>
<html>
<head>
<title>CIP 1102 MIDTERM QUIZ 2 HANDS-ON</title>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>

body {
	margin-left: 150px;
	margin-right: 150px;
	font-size: 1.10em;
	font-family: Helvetica;
	background-color: #121212;
	color: white;
}

table.header {
	border-collapse: collapse;
	width: 100%;
	text-align: center;
}

table.answer {
	border-collapse: collapse;
	width: 30%;
	text-align: center;
}

table.answer th{
	background-color: #cf6679;
	color: white;
}

th{
	color: #cf6679;
}

h1, h2 {
	color: #cf6679;	
	text-align: center;
}

b {
	color: #bb86fc;
}

/* narbar dragdown */
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
  font-family: 'Poppins';  
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
	<a href ="MID_Q1H.php" class="dropbtn">Go back to Midterm Quiz 1</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="FinActivity1.php" class="dropbtn">Go to Finals Activity 1</a>
</div>
<br>

<center>
<table class="header" border="2">
	<tr>
		<th>Name:</th>
		<td>CALUGTONG, CHARLES E.</td>
		<th>Topic:</th>
		<td>Chapters 1 - 4</td>
	</tr>
	<tr>
		<th>EXAM</th>
		<td>Midterm Examination</td>
		<th>Date:</th>
		<td>JUNE 29,2023</td>
	</tr>
</table>

<h1>MIDTERM EXAM</h1>
<br>
<h2>Problem 1</h2> 

<?php
function AlphaNumericCount($text) {
	$characters = str_split($text);
	$letter = 0;
	$numeric = 0;
	$special = 0;
	
	foreach($characters as $char) {
		if(is_numeric($char)) {
			$numeric++;
 		} else if(is_string($char)) {
			if(ctype_alpha($char)) {
				$letter++;
			} else {
				$special++;
			}
		}	
	}
	
	if($special > 0) {
		echo "Invalid value, value has special characters";
	} else if (strlen($text) > 12) {
		echo "Value exceeds 12 characters";
	} else {
		echo "There are <b>$letter</b> letters and <b>$numeric</b> numbers.";
	}
}

$word = "name000";
echo "<p>Value: <b>", $word ,"</b></p>";
echo "<p>Output: ", AlphaNumericCount($word),"</p>";
?>
<br>
<h2>Problem 2</h2> 
<?php
function NumberPlacement($num) {
	if(is_numeric($num)) {
		switch(strlen($num)) {
			case 1:
				echo "Ones";
				break;
			case 2:
				echo "Tens";
				break;
			case 3:
				echo "Hundreds";
				break;
			case 4:
				echo "Thousands";
				break;
			case 5:
				echo "Ten Thousands";
				break;
			case 6:
				echo "Hundred Thousands";
				break;
			case 7:
				echo "Million";
				break;
			default:
				echo "Value exceeds 7 digits.";
				break;
		}	
	} else {
		echo "Invalid value, value must be numeric.";
	}
}

$number = '1234567';
echo "<p>Value: <b>", $number ,"</b></p>";
echo "<p>Output: <b>", NumberPlacement($number),"</b></p>";
?>
</center>
</body>
</html>