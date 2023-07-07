<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 3 </title>
<style>
body{
	font-family: Courier New;
	margin-left: 150px;
	margin-right: 150px;
	font-size: 1.10em;
	font-family: Helvetica;
	background-color: lightgrey;
	color: black;
}
table{
	text-align: center;
	border-collapse: seperate;
	width: 50%;
	height: 15vh;
	font-family: Helvetica;
	border: 2px solid black;
	border-radius: 15px;
	padding: 10px;
	inline

}
th {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
	font-size: 20px;
	border: 2px solid black;
	border-radius: 15px;
}
td{
	border: 1px solid black;
    padding: 8px;
    text-align: center;
	font-size: 20px;
	border: 2px solid black;
	border-radius: 15px;
}

table tr td:not(.nohover):hover{
	background: rgb(50, 51, 49);
	color: white;
}

tr:not(.no):hover{
	background: rgb(50, 51, 49);
	color: white;
}



.header{
	background: rgb(192, 194, 190);
	color: black;
}
	

.wide{
	width: 80%;
}

h1{
	font-family: Helvetica;
}
.center{
	text-align: center;
	font-size: 1.20em;
}

.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: center;
  text-decoration: none;
  font-family: Helvetica;
  margin-top: 15px;
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
  color: black;
  padding: 15px 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  background: #787773;
  
}

.dropdown:hover .dropbtn {
  color: white;
}
.navbar a:hover {
	color: #91918d;
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
<body>
<div class="navbar">
  <div class="dropdown">
    <a href = "../Landingpage.php" class="dropbtn">Back to Homepage </a>
  </div> 
  <a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="#" class="dropbtn">Go back to Midterm Quiz 1</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="#" class="dropbtn">Go next to Finals Activity 1</a>
</div>
<br>

<!--Header-->
<table border = "1" align="center" class = "wide nohover ">
	<tr class = "nohover no">
		<td class ="header nohover "> Name: </td>
		<td class = "nohover "> Valdueza, Frederick C. </td>
		<td class ="header nohover "> Topic: </td>
		<td class = "nohover "> Chapter 2 Functions and Control Structures</td>
	</tr>
	<tr class = "nohover no">
		<td class ="header nohover "> Activity No. </td>
		<td class = "nohover "> Midterm Exam </td>
		<td class ="header nohover "> Date </td>
		<td class = "nohover "> 09/20/2023 </td>
	</tr>
</table>
<br>
<h2 align = "center"> MIDTERM EXAM </h2>

<!--exam starts here-->

<br><br><br><br>
<div class = "center">
<h2> Problem 1 </h2>
<?php

	#problem 1
	
	$name = 'FrederickValdueza7777';
	$split = str_split($name);
	$length = strlen($name);
	$special = preg_match('@[^\w]@', $name);
	$number = 0;
	$character = 0;
	
	
	
	echo "The value is: ", $name, "<br>";
	
	if($length < 13 ){
		echo "Value must be greater than 12 characters";
	} else if ($special){
		echo "Invalid input, you have special characters in your string.";
	} else {
		foreach($split as $char){
			if(is_numeric($char)){
				$number++;
			} else  {
				$character++;
			} 
		}
		echo "Total number of letters: ",$character;
			echo "<br>";
			echo "Total number of numbers: ",$number;
	}
		

						

?>
<br><br><br>
<h2> Problem 2 </h2>
<?php
	#problem 2
	$number_two = '5000';
	$split_two = str_split($number_two);
	$length_two = strlen($number_two);
	
	if ((is_numeric($number_two))) {
		
			if($length_two == 1){
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: One";
		} else if ($length_two == 2) {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: Ten";
		} else if ($length_two == 3) {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: One Hundred";
		} else if ($length_two == 4) {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: One Thousand";
		} else if ($length_two == 5) {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: Ten Thousand";
		} else if ($length_two == 6) {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: One Hundred Thousand";
		} else {
			echo "Value: ", $number_two;
			echo "<br>";
			echo "Output: Millions";
		} 		
	} else {
		echo "There's a special characters, it is not allowed.";
	}
			
		
		
	
 
	
	

?>

</div>
	

</body>
</html>