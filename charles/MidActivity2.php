<!DOCTYPE html>
<html>
<head>
    <title>Multiplication and Temperature Conversion Table</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
        }
		
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

		table {
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
	<a href ="MidActivity1.php" class="dropbtn">Go back to Midterm Activity 1</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MidActivity3.php" class="dropbtn">Go to Midterm Acitivty 3</a>
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
		<th>Activity No.</th>
		<td>Activity 2</td>
		<th>Date:</th>
		<td>JUNE 20,2023</td>
	</tr>
	</table>

    <h1>Multiplication Table</h1>
    <table>
        <tr>
            <th>&nbsp;</th>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 12; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Fahrenheit to Celsius Conversion Table</h1>
    <table>
        <tr>
            <th>Fahrenheit</th>
            <th>Celsius</th>
        </tr>
        <?php
        for ($fahrenheit = 0; $fahrenheit <= 100; $fahrenheit++) {
            $celsius = number_format((($fahrenheit - 32) * 5 / 9), 2);
            echo "<tr>";
            echo "<td>$fahrenheit&deg;F</td>";
            echo "<td>$celsius&deg;C</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Celsius to Fahrenheit Conversion Table</h1>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($celsius = 0; $celsius <= 100; $celsius++) {
            $fahrenheit = ($celsius * 9 / 5) + 32;
            echo "<tr>";
            echo "<td>$celsius&deg;C</td>";
            echo "<td>$fahrenheit&deg;F</td>";
            echo "</tr>";
        }
        ?>
    </table>
	</center>
</body>
</html>
