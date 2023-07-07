<!DOCTYPE HTML>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Lecture 2</title>
	<style>
		body {
			margin-left: 150px;
			margin-right: 150px;
			font-size: 1.10em;
			font-family: Helvetica;
			background-color: #121212;
			color: white;
		}
		
		.head {
			font-size: 52px;
			text-align: center;
			color: #bb86fc;
		}
		
		.container {
			padding: 50px auto;
			margin: 20px;
			justify-content: center;
			display: flex;
			align-item: center;
			
		}
		
		.container .content {
			width: 60%;
			padding: 15px;
			background-color: #292929;
		}
		
.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  text-decoration: none;
  font-family: Helvetica;
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
	<a href ="Lecture1.php" class="dropbtn">Go back to lecture 1</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="Lecture3.php" class="dropbtn">Go next to Lecture 3</a>
</div>
<br>

<h1 class="head">Lecture 2</h1>
<div class="container">
	<div class="content">
		<?php
			function
			displayCompanyName($CompanyName) {
				echo "<p>$CompanyName</p>";
			}
			displayCompanyName("Course Technology");
			
			function averageNumbers($a, $b, $c) {
				$SumOfNumbers = $a + $b + $c;
				$Result = $SumOfNumbers / 3;
				return $Result;
			}
		?>
	</div>
</div>

<div class="container">
	<div class="content">
		
		<?php
			$GlobalVariable = "Global variable";
			function scopeExample() {
				global $GlobalVariable;
				echo "<p>$GlobalVariable</p>";
			}
			scopeExample();
			
			$ExampleVar = 5;
			if ($ExampleVar == 5) { // condition evaluates to 'TRUE'
				echo " <p>The condition evaluates to true.</p> ";
				echo '<p>$ExampleVar is equal to ',
				" $ExampleVar.</p> ";
				echo " <p>Each of these lines will be printed.</p> ";
			}
			echo " <p>This statement always executes after the if
			statement.</p> ";
		?>
	</div>
</div>

<div class="container">
	<div class="content">
		<?php
			//if..else statements
			$Today = " Wednesday ";
			if ($Today == " Monday ")
				echo " <p>Today is Monday</p> ";
			else
				echo " <p>Today is not Monday</p> ";

		
			//Nested if..else statements
			$SalesTotal = 70;
			if ($SalesTotal >= 50){
				if ($SalesTotal <= 100){
					echo " <p>The sales total is between 50 and 100, inclusive.</p> ";
				}
			}
			
			//SWITCH statements
			switch ($Today) {
				case "Monday":
					echo " <p>Today is Monday</p> ";
					break;
				case "Tuesday":
					echo " <p>Today is Tuesday</p> ";
					break;
				default:
					echo " <p>Today is not Monday nor Tuesday</p> ";
					break;
			}
		?>
	</div>
</div>

<div class="container">
	<div class="content">
		
		<?php
			//loop structures
			
			//while loop
			$Count = 1;
			while ($Count <= 5) {
				echo " $Count<br /> ";
				++$Count;
			}
			echo " <p>You have printed 5 numbers.</p> ";
			
			//do...while loop
			$Count = 2;
			do {
				echo " <p>The count is equal to $Count</p> ";
				++$Count;
			} while ($Count < 2);
			
			//for loop
			$FastFoods = array(" pizza", " burgers ", " french fries ", " tacos ", " fried chicken ");
			for ($Count = 0; $Count < 5; ++$Count) {
				echo $FastFoods[$Count], " <br /> ";
			}
			
			//foreach statement
			$DaysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
			foreach ($DaysOfWeek as $Day) {
				echo "<p>$Day</p>";
			}
			
			$DaysofWeek = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
			foreach ($DaysOfWeek as $DayNumber => $Day) {
				echo "<p>Day ".$DayNumber." is $Day</p>";
			}

		?>
	</div>
</div>

</body>
</html>