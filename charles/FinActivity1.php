<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 3 </title>
<style>
body {
	margin-left: 150px;
	margin-right: 150px;
	font-size: 1.10em;
	font-family: Helvetica;
	background-color: #121212;
	color: white;
}

table {
	width: 100%;
	text-align: center;
	border-collapse: collapse;
}

th, h4 {
	color: #cf6679;
}

h1 {
	color: #cf6679;	
	text-align: center;
}

b {
	color: #bb86fc;
}

p {
	font-family: 'Courier New', monospace;
	text-align:center;
}	

.error {
	color: #b00020;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #bb86fc;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
	background-color: #3700b3;
	color: white;
}


.container {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	width: 50%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	color: #121212;
	
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
	<a href ="MID_EXAM.php" class="dropbtn">Go back to Midterm Exam</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MidActivity1.php" class="dropbtn">Go back to Midterm Activity 1</a>
</div>
<br>

<table border="2">
	<tr>
		<th>Name:</th>
		<td>CALUGTONG, CHARLES E.</td>
		<th>Topic:</th>
		<td>Chapter 4 Handling User Input</td>
	</tr>
	<tr>
		<th>Activity No.</th>
		<td>ACTIVITY 1</td>
		<th>Date:</th>
		<td>JULY 4,2023</td>
	</tr>
</table>

<h1>FINALS ACTIVITY 1</h1>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="username">Username: </label>
			<input type="text" id="username" name="username" placeholder="Enter Username" required>
			<br>
			<label for="password">Password: </label>
			<input type="text" id="password" name="password" placeholder="Enter password" required>
			<br>
			<label for="phone"> Phone Number: </label>
			<input type = "text" name="phone" value="09" placeholder="Enter your phone number" required>
			<input class="button" type="submit" value="Submit" id="password">
		</form>
</div>

<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$username = $_POST['username'];
        $password = $_POST['password'];
		$phoneNum = $_POST['phone'];
		
		$errors = [];
		
		$phoneNum = preg_replace('/\D/',"",$phoneNum);
		
		
        if (strlen($password) < 8) {
            $errors[] = '<p class="error">Invalid input. Password must contain a maximum of 8 characters only.</p>';
        }

        if (!ctype_alnum($password)) {
            $errors[] = '<p class="error">Invalid input. Special characters are not allowed.</p>';
        }

        if(preg_match_all("/[A-Z]/", $password) < 2 ){
			$errors[] = '<p class="error">Invalid input. Password must contain at most 2 uppercase letters.</p>';
		}

        if (stristr($password, $username)) {
            $errors[] = '<p class="error">Invalid input. The password must not be similar to the username.</p>';
        }

        if (empty($errors)) {
            echo '<p>Valid password.</p><br>';
			echo '<p>Username:<b>'.$username.'</b></p>';
			echo '<p>Password:<b>'.$password.'</b></p>';
        } else {
            foreach ($errors as $error) {
                echo "$error";
            }
        }
		
		if(preg_match('/^[0-9]{11}$/',$phoneNum))
		{
			echo "<br><p>Valid phone number: <b>+63".substr($phoneNum,1,10)."</b> </p>";
			
			$cellNum = intval(substr($phoneNum,1,3));
			
			if(
			($cellNum === 917) || 
			($cellNum === 905) ||
			($cellNum === 906) ||
			($cellNum === 915) ||
			($cellNum === 916) ||
			($cellNum === 917) ||
			($cellNum === 926) ||
			($cellNum === 927) ||	
			($cellNum === 935) ||
			($cellNum === 936) ||
			($cellNum === 937) ||
			($cellNum === 945) ||
			
			($cellNum === 953) ||
			($cellNum === 954) ||
			($cellNum === 955) ||
			($cellNum === 956) ||
			
			($cellNum === 965) ||
			($cellNum === 966) ||
			($cellNum === 967) ||
			
			($cellNum === 975) ||
			($cellNum === 976) ||
			($cellNum === 977) ||
			($cellNum === 978) ||
			($cellNum === 979) ||
			
			($cellNum === 995) ||
			($cellNum === 996) ||
			($cellNum === 997)
				)
			{
				echo "<p>The mobile number is from GLOBE/TM</p>";
			}
			else if(
			($cellNum === 907) || 
			($cellNum === 908) ||
			($cellNum === 909) ||
			($cellNum === 910) ||
			($cellNum === 912) ||
			($cellNum === 918) ||
			($cellNum === 919) ||
			($cellNum === 921) ||	
			($cellNum === 922) ||
			($cellNum === 923) ||
			($cellNum === 924) ||
			($cellNum === 925) ||
			
			($cellNum === 928) ||
			($cellNum === 929) ||
			($cellNum === 930) ||
			($cellNum === 931) ||
			
			($cellNum === 932) ||
			($cellNum === 933) ||
			($cellNum === 934) ||
			
			($cellNum === 938) ||
			($cellNum === 939) ||
			($cellNum === 940) ||
			($cellNum === 941) ||
			($cellNum === 942) ||
			
			($cellNum === 946) ||
			($cellNum === 947) ||
			($cellNum === 948) ||
			($cellNum === 949)
			)			
			{
				echo "<p> The mobile number is from SMART/TALK&TEXT/SUN</p>";
			}
			else
			{
				echo "<p> Invalid input, Number does not belong to a Cell Service</p>";
			}
		}
		else
		{
			echo '<p class="error">Invalid Phone number. Enter a 13-digit number only </p>';
		}
	}
?>
</body>
</html>