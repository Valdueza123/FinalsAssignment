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

h1 {
	color: #cf6679;	
	text-align: center;
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
	<a href ="MidActivity3.php" class="dropbtn">Go back to Midterm Activity 3</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MID_EXAM.php" class="dropbtn">Go to Midterm Exam</a>  
</div>
<br>

<center>
<table class="header" border="2">
	<tr>
		<th>Name:</th>
		<td>CALUGTONG, CHARLES E.</td>
		<th>Topic:</th>
		<td>Chapter 2 Functions and Control Structures</td>
	</tr>
	<tr>
		<th>QUIZ No.</th>
		<td>Quiz Hands-on 1</td>
		<th>Date:</th>
		<td>JUNE 29,2023</td>
	</tr>
</table>

<h1>Number 3: Hourglass</h1>
<?php
function displayHourglass($row)
{
    $col = 2 * $row - 1;
    $num = $row;
    
    echo "<table class=\"answer\" border='1'>";
    
    for ($x = 1; $x <= $row; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= $col; $y++) {
            if ($y >= $x && $y <= $col - ($x - 1)) {
                echo "<th>ඞ</th>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
        $num--;
    }
    
    for ($x = $row - 1; $x >= 1; $x--) {
        echo "<tr>";
        for ($y = 1; $y <= $col; $y++) {
            if ($y >= $x && $y <= $col - ($x - 1)) {
                echo "<th>ඞ</th>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
        $num++;
    }
    
    echo "</table>";
}

$row = 15;
displayHourglass($row);
?>

</center>
</body>
</html>