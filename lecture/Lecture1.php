<!DOCTYPE HTML>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Lecture 1</title>
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
		/* narbar dragdown */
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
	<a href ="Lecture5.php" class="dropbtn">Go back to lecture 5</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="Lecture2.php" class="dropbtn">Go next to Lecture 2</a>
</div>
<br>

<h1 class="head">Lecture 1</h1>
<div class="container">
	<div class="content">
		<h1>Multiple Script Sections</h1>
		<h2>First Script Section</h2>
		<?php echo "<p>Output from the first script section.</p>";
		?>
		<h2>Second Script Section</h2>
		<?php echo "<p>Output from the second script
		section.</p>";?>
	</div>
</div>

<div class="container">
	<div class="content">
		<?php
		echo '<p>Explore <strong>Africa</strong>, <br />';
		Echo "<strong>South America</strong>, <br />";
		ECHO " and <strong>Australia</strong>!</p>";
		?>
		
		
		<?php
		/*
		This line is part of the block comment.
		This line is also part of the block comment.
		*/
		echo "<h1>Comments Example</h1>"; // Line comments can follow
		echo 'code statements'
		// This line comment takes up an entire line.
		# This is another way of creating a line comment.
		/* This is another way of creating
		a block comment. */
		?>
	</div>
</div>

<div class="container">
	<div class="content">
		<?php
			$VotingAge = 18;
			echo $VotingAge;
			echo '<p>The legal voting age is ', $VotingAge, '.</p>';
		?>
		
		<?php
			define("PI", 3.14159);
			echo "<p>The pi is equivalent to ",PI,"</p>";
		?>
		
		<?php
			$Provinces = array
			(
				"Newfoundland and Labrador",
				"Prince Edward Island",
				"Nova Scotia",
				"New Brunswick",
				"Quebec",
				"Ontario",
				"Manitoba",
				"Saskatchewan",
				"Alberta",
				"British Columbia"
			);
			
			$Territories = array("Nunavut", "Northwest Territories", "Yukon
			Territory");
			
			echo "The third element in provinces is ",$Provinces[2],".";
			
			echo "<br><br>";
			
			ECHO "There are ", count($Provinces), " provinces and ", count($Territories)," Territories."
		?>
	</div>
</div>

<div class="container">
	<div class="content">
		<?php
			$DivisionResult = 15 / 6;
			$ModulusResult = 15 % 6;
			
			echo "<p>15 divided by 6 is $DivisionResult.</p>"; //prints '2.5'

			echo "The whole number 6 goes into 15 twice, with a remainder of $ModulusResult.</p>"; // prints '3'
		?>
		
		<?php
			$MyFavoriteSuperHero = "Superman";
			$MyFavoriteSuperHero = "Batman";
			
			echo "$MyFavoriteSuperHero";
		?>
		
		<?php
			$BlackjackPlayer1 = 20;
			
			($BlackjackPlayer1 <= 21) ? $Result =
				"Player 1 is still in the game. " : $Result = "Player 1 is out of the action.";

				echo "<p>", $Result, "</p>";
		?>
	</div>
</div>

</body>
</html>