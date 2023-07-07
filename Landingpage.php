<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="Landingpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <title>Midterm Assignment 2</title>
        
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
        <style>
            .inner_main_menu {
				margin: 0 auto;

			}
			
            .inner_main_menu ul {
				list-style: none;
				text-align: right;
			} 
			
            .inner_main_menu ul li {
				float: none; 
				display: inline-block;
				position: relative;
			}   
			
            .inner_main_menu ul li:nth-child(1) {
				float: left;
			}
			
            .inner_main_menu ul li:nth-child(2) {
				float: left;
			}
			
			.inner_main_menu ul li:nth-child(3) {
				float: left;
			}
			
            .inner_main_menu ul li a {
				color: #fff;
				font-size: 20px; 
				text-transform: uppercase;
				text-decoration: none; 
				display: block;
				padding: 10px 20px;
			}    
            
			.inner_main_menu ul li a:hover {
				color: #6FDA44	;
			} 
			
            .inner_main_menu ul li ul {
				position: absolute;
				top: 40px; 
				left: -9999999px; 
				width: 200px;
				background: #262626; 
				padding: 0;
			}  
            
			.inner_main_menu ul li:hover ul {
				left: 0px;
			}   
            
			.inner_main_menu ul li ul li {
				float: left;
				width: 100%;
				text-align: left;
			}  
            
			.inner_main_menu ul li ul li a {
				color: #fff;
				text-transform: capitalize;
				font-size: 15px;
			}  
            
			.inner_main_menu ul li ul li a:hover {
				color: #262626;
				background: #ddd; 
			}  
            
			.inner_main_menu ul li ul li ul {
				top: 0; 
				left: -999999px;
			}  
            
			.inner_main_menu ul li:hover ul li ul {
				top: 0; 
				left: -999999px;
			}  
            
			.inner_main_menu ul li ul li:hover ul {
				top: 0; 
				left: 200px;
			}  
            
			.inner_main_menu ul li:hover a {
				color: 	#bb86fc;
			}  
            
			.inner_main_menu ul li:hover ul li a {
				color: #ffffff
			}  
            
			.inner_main_menu ul li ul li a:hover {
				color: #bb86fc;
			}  
            
			.inner_main_menu ul li ul li:hover a {
				background: #ddd; 
				color: #262626;
			}  
            
			.inner_main_menu ul li ul li:hover ul li a {
				background: #262626; 
				color: #fff;
			}  
            
			.inner_main_menu ul li ul li ul li a:hover {
				background: #ddd; 
				color: #262626;
			}  
            
			.slicknav_menu {
              background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
              font-size: 16px;
              padding: 5px;
              display: none;    
              position: fixed;
              right: 0;
              width: 100%;
              z-index: 99999;
            }
            
			ul.slicknav_nav {
              background: #262626 none repeat scroll 0 0;
              left: 0;
              position: absolute;
              top: 0;
              width: 80%;
            }
            
			.slicknav_btn {top: 35px;}
				#main_menu{width: 100%; 
				position: relative;
			}
            
			.logo_area {
				width: 300px; 
				height: 400px; 
				position: absolute; 
				left: 50%; 
				top: 0; 
				content: ""; 
				margin-left:-150px;
				text-align: center; 
			}
			
            @media only screen and (min-width: 200px) and (max-width: 767px) { 
                .slicknav_menu {
					display: block;
				}
				
                .inner_main_menu {
					display: none;
				}
                
				.logo_area {
					height: auto;
					left: 0;
					margin-left: 0;
					position: relative;
					top: 0;
					width: 130px;
				}
                
				.logo_area img {
					height: auto;
					width: 100%;
				}
            }
			img{
				width: 100px;
				height: 60px;
			}
			


        </style>
    </head>
    <body>
        <div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="images/1.png" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul id="menu">
				<div class = "navbar">				
					<div class="dropdown">
						<button class="dropbtn">Calugtong 
							<i class="fa fa-caret-down"></i> </button>
						<div class="dropdown-content">
						  <a href="charles/MidActivity1.php">Midterm Acitivty 1</a>
						  <a href="charles/MidActivity2.php">Midterm Acitivty 2</a>
						  <a href="charles/MidActivity3.php">Midterm Acitivty 3</a>
						  <a href="charles/MID_Q1H.php">Midterm Quiz 2</a>
						  <a href="charles/MID_EXAM.php">Midterm Exam</a>
						  <a href="charles/FinActivity1.php">Finals Activity 1</a>
						</div>	
					</div>
					
				  <div class="dropdown">
					<button class="dropbtn">Valdueza 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="#">Midterm Acitivty 1</a>
						<a href="#">Midterm Acitivty 2</a>
						<a href="valdueza/MidActivity3.php">Midterm Acitivty 3</a>
						<a href="#">Midterm Quiz 2</a>
						<a href="valdueza/MID_EXAM.php">Midterm Exam</a>
						<a href="#">Finals Activity 1</a>
					</div>	
				  </div>
					<li></li>
                    <li><a href="lecture/Lecture1.php">Lectures</a></li>
                    <li><a href="Templates/Template1.html">Mini-project</a></li>
				</div>
                </ul>
            </div>
        </div>
		
		<div class="slider-container">
			<div class="slider">
				
					<div class="overlay">
						<h2>Technology Trends</h2>
						<p>A webpage for all of the latest Technology Trends.</p>
						<div class = "paragraph">
							<button onclick="typeWriter()" class = "button buttonColor">Get Started!</button>
							<p id="demo"></p>

							<script class = "paragraph">
							var i = 0;
							var txt = 'As an IT student, We are currently engaged in a school project that centers around HTML, PHP, and SQL. These three technologies are fundamental components of web development and are highly relevant in the field of information technology. In this school project, our objective is to leverage these technologies to build a functional and interactive website. We will use HTML to structure the web pages, PHP to handle server-side processing and interaction, and SQL to manage and retrieve data from a database. By combining these technologies, Me and my partner aim to create a robust and user-friendly web application.';
							var speed = 50;

							function typeWriter() {
							  if (i < txt.length) {
								document.getElementById("demo").innerHTML += txt.charAt(i);
								i++;
								setTimeout(typeWriter, speed);
							  }
							}
							</script>
						</div>
					</div>
			</div>
		</div>
    </body>
</html>